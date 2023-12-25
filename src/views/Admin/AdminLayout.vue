<!-- AdminSidebar.vue -->

<template>
    <v-layout>
      <v-app-bar class="bg-blue-darken-4" density="compact">
        <template v-slot:prepend>
          <v-app-bar-nav-icon></v-app-bar-nav-icon>
        </template>
  
        <v-app-bar-title>AquaWage</v-app-bar-title>
  
        <template v-slot:append>
          <v-btn icon="mdi-dots-vertical"></v-btn>
        </template>
      </v-app-bar>
      <!-- Sidebar -->
      <v-navigation-drawer app>
        <v-list dense>
          <!-- Dashboard -->
          <v-list-item link to="/admin/dashboard">
            <v-list-item-icon>
              <v-icon>mdi-view-dashboard</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>Dashboard</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
  
          <!-- Payroll Calculations -->
          <v-list-item link to="/admin/payroll">
            <v-list-item-icon>
              <v-icon>mdi-currency-usd</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>Payroll Calculations</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
  
          <!-- Add Employee -->
          <v-list-item link to="/admin/signup">
            <v-list-item-icon>
              <v-icon>mdi-account-plus</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>Add Employee</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
  
          <!-- Approval of Leave Request -->
          <v-list-item link to="/admin/approval-leave-request">
            <v-list-item-icon>
              <v-icon>mdi-check-circle</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>Approval of Leave Request</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-navigation-drawer>
      <v-main>
        <router-view></router-view>
      </v-main>
    </v-layout>
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  export default defineComponent({
    // ... other component logic
  });
  </script>
  
  <style scoped>
  /* Add your custom styles here */
  </style>
  