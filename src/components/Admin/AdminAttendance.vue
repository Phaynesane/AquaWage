<template>
    <div>
      <h2>Time Sheets</h2>
  
      <!-- Date and Employee Information -->
      
      <v-col>
        <!-- Employee Search -->
        <v-row align="center">
          <v-col>
            <v-text-field
              v-model="employeeSearch"
              label="Search Employee"
              append-icon="mdi-magnify"
              @click:append="searchEmployees"
            ></v-text-field>
          </v-col>
        </v-row>
      </v-col>
  
     
    <!-- Display Logs -->
    <v-divider class="my-4"></v-divider>
    <h3>Employee Logs</h3>
    <v-list>
      <v-list-item-group v-if="logs.length > 0">
        <v-list-item v-for="(log, index) in logs" :key="index">
          <v-list-item-content>
            <v-list-item-title>{{ log.date }} - {{ log.logType }} - {{ log.reason }}</v-list-item-title>
            <v-list-item-subtitle>{{ log.hours }} hours {{ log.minutes }} minutes</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
      <v-list-item v-else>
        <v-list-item-content>No logs found for the selected date and employee.</v-list-item-content>
      </v-list-item>
    </v-list>
    </div>
  </template>
  
  <script>
  export default {
    data(){
    return {
      selectedDate: new Date().toISOString().substr(0, 10), // Today's date by default
      selectedEmployee: null,
      reason: '',
      logType: 'Time In',
      hours: '',
      minutes: '',
      showLogForm: false,
      employees: [
        // Sample employee data, replace with actual employee data
      ],
      logs: [],
    };
  },
  methods: {
  
    // ... your other methods ...
  },
};
  </script>
  
  <style scoped>
  /* Add your custom styles here */
  </style>
  