<template>
    <v-container v-if="employee">
      <!-- ... (previous code) ... -->
  
      <!-- Paychecks section -->
      <v-row>
        <v-col>
          <h2>Paychecks</h2>
  
          <!-- Display paychecks or a message if there are none -->
          <v-row v-if="employee.paychecks && employee.paychecks.length > 0">
            <v-col v-for="paycheck in employee.paychecks" :key="paycheck.id">
              <strong>Period:</strong> {{ paycheck.period }} |
              <strong>Amount:</strong> {{ paycheck.amount }} |
              <strong>Status:</strong> {{ paycheck.status }}
            </v-col>
          </v-row>
          <v-row v-else>
            No paychecks found.
          </v-row>
  
          <!-- Additional features or actions for paychecks -->
          <!-- For example, a button to view detailed paycheck information -->
          <v-row>
            <v-col>
              <v-btn @click="viewPaycheckDetails">View Paycheck Details</v-btn>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-container>
    <v-container v-else>
      Loading employee data...
    </v-container>
  </template>
  
  <script>
  export default {
    data() {
      return {
        employee: null, // Initialize as null
      };
    },
    created() {
      // Fetch employee data asynchronously
      this.fetchEmployeeData();
    },
    methods: {
      fetchEmployeeData() {
        // Simulate an API call or asynchronous operation
        setTimeout(() => {
          this.employee = {
            lastName: 'Doe',
            firstName: 'John',
            middleName: 'M',
            dateOfBirth: '1990-01-01',
            gender: 'Male',
            contactNumber: '123-456-7890',
            email: 'john.doe@example.com',
            address: '123 Main St, Cityville',
            paychecks: [
              { id: 1, period: 'January 2023', amount: 5000, status: 'Paid' },
              { id: 2, period: 'February 2023', amount: 5500, status: 'Paid' },
              // Add more paychecks as needed
            ],
            // Add more fields as needed
          };
        }, 1000); // Simulated delay of 1 second
      },
      editProfile() {
        // Logic to navigate to the edit profile page or show a modal for editing
        console.log('Edit profile clicked');
      },
      changePassword() {
        // Logic to handle changing the password
        console.log('Change password clicked');
      },
      viewPaycheckDetails() {
        // Logic to navigate to the paycheck details page or show a modal for viewing details
        console.log('View paycheck details clicked');
      },
    },
    
  };
  </script>
  
  <style scoped>
  /* Add your custom styles here */
  </style>
  