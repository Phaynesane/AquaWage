<!-- EmployeeLayout.vue -->
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
        <v-navigation-drawer class="bg-blue-darken-4" theme="dark" app>
            <v-list dense>
                <!-- Profile -->
                <v-list-item link to="/employee/profile">
                    <v-list-item-icon>
                        <v-icon>mdi-account</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Profile</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                
                <!-- Add Attendance -->
                <v-list-item link to="/employee/attendance">
                    <v-list-item-icon>
                        <v-icon>mdi-calendar-clock</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Attendance</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>


                <!-- Manage Leave Requests -->
                <v-list-item link to="/employee/manage_leave">
                    <v-list-item-icon>
                        <v-icon>mdi-calendar-clock</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Manage Leave Requests</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <!-- Paychecks -->
                <v-list-item link to="/employee/paychecks">
                    <v-list-item-icon>
                        <v-icon>mdi-currency-usd</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Paychecks</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <!-- Calendar -->
                <v-list-item link to="/employee/calendar">
                    <v-list-item-icon>
                        <v-icon>mdi-calendar-month</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Calendar</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <!-- Main Content -->
        <v-main>
            <router-view></router-view>
        </v-main>
    </v-layout>
</template>

<script>
import axios from 'axios';
import { defineComponent } from 'vue';

export default defineComponent({
  data() {
    return {
      employeeDetails: null,
    };
  },
  
  
});
</script>
