<template>
    <v-container v-if="employee">
      <v-row>
        <v-col>
          {{ employee.firstname }}
          {{ editedProfile }}
          <h1 class="profile-title">Employee Profile</h1>
          <v-row class="profile-info">
            <!-- Profile Details -->
            <v-col cols="6">
              <strong class="label">First Name:</strong>
              <v-text-field v-model="employee.firstname" prepend-icon="mdi-account"></v-text-field>
            </v-col>
            <v-col cols="6">
              <strong class="label">Last Name:</strong>
              <v-text-field v-model="employee.lastname" prepend-icon="mdi-account"></v-text-field>
            </v-col>
          </v-row>
          <v-row class="profile-info">
            <v-col cols="6">
              <strong class="label">Middle Name:</strong>
              <v-text-field v-model="employee.middlename" prepend-icon="mdi-account"></v-text-field>
            </v-col>
            <v-col cols="6">
              <strong class="label">Gender:</strong>
              <v-text-field v-model="employee.gender" prepend-icon="mdi-gender-male-female"></v-text-field>
            </v-col>
          </v-row>
          <v-row class="profile-info">
            <v-col cols="6">
              <strong class="label">Date of Birth:</strong>
              <v-text-field v-model="employee.dateofbirth" prepend-icon="mdi-calendar" type="date"></v-text-field>
            </v-col>
            <v-col cols="6">
              <strong class="label">Contact Number:</strong>
              <v-text-field v-model="employee.contactnumber" prepend-icon="mdi-phone"></v-text-field>
            </v-col>
          </v-row>
          <v-row class="profile-info">
            <v-col cols="6">
              <strong class="label">Email:</strong>
              <v-text-field v-model="employee.email" prepend-icon="mdi-email"></v-text-field>
            </v-col>
            <v-col cols="6">
              <strong class="label">Address:</strong>
              <v-text-field v-model="employee.address" prepend-icon="mdi-home"></v-text-field>
            </v-col>
          </v-row>
  
          <!-- Action Buttons -->
          <v-row class="action-buttons">
            <v-col>
              <v-btn class="action-button" @click="openEditProfileDialog">Edit Profile</v-btn>
            </v-col>
            <v-col>
              <v-btn class="action-button" @click="openChangePasswordDialog">Change Password</v-btn>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
  
  <!-- Edit Profile Dialog -->
  <v-dialog v-model="editProfileDialog" max-width="600">
    <v-card>
      <v-card-title>Edit Profile</v-card-title>
      <v-card-text>
        <v-form @submit.prevent="saveProfileChanges">
          <v-text-field v-model="editedProfile.firstName" label="First Name"></v-text-field>
          <v-text-field v-model="editedProfile.lastName" label="Last Name"></v-text-field>
          <v-text-field v-model="editedProfile.middleName" label="Middle Name"></v-text-field>
          <v-text-field v-model="editedProfile.gender" label="Gender"></v-text-field>
          <v-text-field v-model="editedProfile.dateOfBirth" label="Date of Birth"></v-text-field>
          <v-text-field v-model="editedProfile.contactNumber" label="Contact Number"></v-text-field>
          <v-text-field v-model="editedProfile.email" label="Email"></v-text-field>
          <v-text-field v-model="editedProfile.address" label="Address"></v-text-field>
  
          <!-- Add other fields as needed -->
  
          <v-row>
            <v-col>
              <v-btn type="submit" color="primary">Save Changes</v-btn>
            </v-col>
            <v-col>
              <v-btn @click="closeEditProfileDialog">Cancel</v-btn>
            </v-col>
          </v-row>
        </v-form>
      </v-card-text>
    </v-card>
  </v-dialog>
  
  
      <!-- Change Password Dialog -->
      <v-dialog v-model="changePasswordDialog" max-width="600">
        <v-card>
          <v-card-title>Change Password</v-card-title>
          <v-card-text>
            <v-form @submit.prevent="savePasswordChanges">
              <v-text-field v-model="newPassword" label="New Password" type="password"></v-text-field>
              <v-text-field v-model="confirmPassword" label="Confirm Password" type="password"></v-text-field>
  
              <v-row>
                <v-col>
                  <v-btn type="submit" color="primary">Save Changes</v-btn>
                </v-col>
                <v-col>
                  <v-btn @click="closeChangePasswordDialog">Cancel</v-btn>
                </v-col>
              </v-row>
            </v-form>
          </v-card-text>
        </v-card>
      </v-dialog>
    </v-container>
    <v-container v-else>
      Loading employee data...
    </v-container>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        employee: { lastName: 's',
          firstName: 'ss',
          middleName: '',
          dateOfBirth: '',
          gender: '',
          contactNumber: '',
          email: '',
          address: ''},
        editedProfile: {
          lastName: '',
          firstName: '',
          middleName: '',
          dateOfBirth: '',
          gender: '',
          contactNumber: '',
          email: '',
          address: '',
        },
        editProfileDialog: false,
        changePasswordDialog: false,
        newPassword: '',
        confirmPassword: '',
      };
    },
    created() {
      // Assuming you have the user ID stored in localStorage
      const userId = localStorage.getItem('userId');
  
      // Check if userId exists before making the request
      if (userId) {
        this.fetchEmployeeDetails(userId);
      } else {
        console.error('User ID not found in localStorage');
      }
    },
    methods: {
      async fetchEmployeeDetails(userId) {
        try {
          const response = await axios.get(`/api/getEmployeeDetails?userId=${userId}`);
  
          if (response.status === 200 && response.data.message === 'success') {
            console.log(response.data.data);
            this.employee = response.data.data;
            // Initialize editedProfile with current employee data
            this.editedProfile = { ...this.employee };
          } else {
            console.error('Error fetching employee details:', response.data.message || 'Unknown error');
          }
        } catch (error) {
          console.error('Error fetching employee details:', error);
        }
      },
  
      openEditProfileDialog() {
        this.editProfileDialog = true;
      },
      closeEditProfileDialog() {
        this.editProfileDialog = false;
        // Reset editedProfile to current employee data
        this.editedProfile = { ...this.employee };
      },
      saveProfileChanges() {
      // Assuming you have the user ID stored in localStorage
      const userId = localStorage.getItem('userId');
  
      // Assuming you have an API endpoint for updating employee details
      const apiUrl = `/api/updateEmployeeDetails`;
  
      // Assuming you're using axios for HTTP requests
      axios.post(apiUrl, {
        userId: userId,
        firstName: this.editedProfile.firstName,
        lastName: this.editedProfile.lastName,
        middleName: this.editedProfile.middleName,
        gender: this.editedProfile.gender,
        dateOfBirth: this.editedProfile.dateOfBirth,
        contactNumber: this.editedProfile.contactNumber,
        email: this.editedProfile.email,
        address: this.editedProfile.address,
        // Add other fields as needed
      })
      .then(response => {
        console.log(response.data);
        // Handle success, e.g., close the dialog
        this.closeEditProfileDialog();
      })
      .catch(error => {
        console.error('Error updating employee details:', error);
        // Handle error, e.g., show an error message
      });
    },
      openChangePasswordDialog() {
        this.changePasswordDialog = true;
      },
      closeChangePasswordDialog() {
        this.changePasswordDialog = false;
        this.newPassword = '';
        this.confirmPassword = '';
      },
      savePasswordChanges() {
        // Add logic to save password changes to the backend
        this.closeChangePasswordDialog();
      },
    },
  };
  </script>
  
  <style scoped>
  </style>
  
  <style scoped>
  .profile-title {
    text-align: center;
    font-size: 1.5rem;
    margin-bottom: 20px;
  }
  
  .label {
    font-weight: bold;
  }
  
  .left-aligned {
    text-align: left;
  }
  
  .right-aligned {
    text-align: right;
  }
  
  .profile-info {
    margin-bottom: 10px;
  }
  
  .action-buttons {
    margin-top: 20px;
    text-align: center;
  }
  
  .action-button {
    margin: 0 10px;
  }
  </style>