<template>
    <div>
      <h2>Time Sheets</h2>
  
      <!-- Log Entry Form -->
      <v-row>
        <v-col>
          <!-- Using v-date-picker for date input -->
          <v-date-picker v-model="formattedDate" label="Date"></v-date-picker>
        </v-col>
        <v-col>
          <v-text-field v-model="reason" label="Reason"></v-text-field>
        </v-col>
        <v-col>
          <v-select v-model="logType" :items="['Time In', 'Time Out']" label="Log Type"></v-select>
        </v-col>
        <v-col>
          <v-text-field v-model="hours" label="Hours" type="number"></v-text-field>
        </v-col>
        <v-col>
          <v-text-field v-model="minutes" label="Minutes" type="number"></v-text-field>
        </v-col>
      </v-row>
  
      <!-- Save Button -->
      <v-btn @click="saveLog" class="mt-2" color="success">Save Log</v-btn>
  
      <v-divider class="my-4"></v-divider>
      <h3>Employee Logs</h3>
  
      <v-data-table
        :headers="headers"
        :items="logs"
        class="elevation-1"
      >
      <template v-slot:item.date="{ item }">
        {{ formatDate(new Date(item.date)) }}
      </template>
        <template v-slot:item.logType="{ item }">
          {{ item.logType }}
        </template>
        <template v-slot:item.reason="{ item }">
          {{ item.reason }}
        </template>
        <template v-slot:item.hours="{ item }">
          {{ item.hours }} hours
        </template>
        <template v-slot:item.minutes="{ item }">
          {{ item.minutes }} minutes
        </template>
      </v-data-table>
    </div>
  </template>
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        currentDate: new Date(),
        formattedDate: new Date(),
        reason: '',
        logType: 'Time In',
        hours: '',
        minutes: '',
        showLogForm: false,
        employees: [],
        logs: [],
      };
    },
    methods: {
      getAmPm(date) {
        const hours = date.getHours();
        return hours < 12 ? 'AM' : 'PM';
      },
      formatDate(date) {
        const year = date.getFullYear();
        const month = date.getMonth() + 1;
        const day = date.getDate();
        const hours = date.getHours();
        const minutes = date.getMinutes();
        const amPm = this.getAmPm(date);
  
        // Format the date as YYYY-MM-DD hh:mm AM/PM
        return `${year}-${month}-${day} ${hours}:${minutes} ${amPm}`;
      },
      saveLog() {
        const newLog = {
          date: this.formattedDate.toISOString().substr(0, 10),
          logType: this.logType,
          reason: this.reason,
          hours: parseInt(this.hours) || 0,
          minutes: parseInt(this.minutes) || 0,
        };
  
        axios.post('api/create', newLog)
          .then(this.handleSaveSuccess)
          .catch(this.handleSaveError);
      },
      handleSaveSuccess(response) {
        this.logs.push(response.data);
        this.clearForm();
      },
      handleSaveError(error) {
        console.error('Error saving log:', error);
        // Handle error as needed
      },
      clearForm() {
        this.reason = '';
        this.logType = 'Time In';
        this.hours = '';
        this.minutes = '';
        this.formattedDate = new Date();
      },
    },
    created() {
      // Fetch logs before the component is mounted
      axios.get('api/logs')
        .then(response => {
          this.logs = response.data.sort((a, b) => new Date(b.date) - new Date(a.date));
        })
        .catch(error => {
          console.error('Error fetching logs:', error);
          // Handle error as needed
        });
  
      // Update currentDate every minute
      setInterval(() => {
        this.currentDate = new Date();
      }, 60000);
    },
    mounted() {
      console.log('Component mounted');
      console.log('Date:', this.formattedDate);
      console.log('Logs:', this.logs);
      // ... add more logging as needed
    },
  };
  </script>