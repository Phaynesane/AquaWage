import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import SigninViews from '@/views/SigninViews.vue';
import SignupViews from '@/views/SignupViews.vue';

import EmployeeLayout from '../views/Employee/EmployeeLayout.vue';
import Profile from '../components/Employee/Profile.vue'; 
import Attendance from '../components/Employee/Attendance.vue';
import ManageLeave from '../components/Employee/ManageLeave.vue';
import Paychecks from '../components/Employee/Paychecks.vue';
import Calendar from '../components/Employee/Calendar.vue';


import AdminLayout from '../views/Admin/AdminLayout.vue';
import AdminPayroll from '../components/Admin/AdminPayroll.vue';
import AdminDashboard from '../components/Admin/AdminDashboard.vue';
import AdminAttendance from '../components/Admin/AdminAttendance.vue';
import SignupForm from '../components/Admin/SignupForm.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },

  {
    path: '/signin',
    component: SigninViews
  },
  {
    path: '/signup',
    component: SignupViews
  },

  {
    path: '/admin',
    component: AdminLayout,
    children: [
      {
        path: 'dashboard',
        name:'AdminDashboard',
        component: AdminDashboard,
      },
      {
        path: 'payroll', 
        name: 'AdminPayroll',
        component: AdminPayroll,
      },
      {
        path: 'attendance', 
        name: 'AdminAttendance',
        component: AdminAttendance,
      },
      {
        path: 'signup', 
        name: 'SignupForm',
        component: SignupForm,
      },
    ],
  },

  {
    path: '/employee',
    component: EmployeeLayout,
    children: [
      {
        path: 'home',
        name: 'EmployeeHome',
        component: () => import('../components/Employee/EmployeeHome.vue'),
      },
      {
        path: 'profile',
        name: 'EmployeeProfile',
        component: Profile,
      },
      {
        path: 'manage_leave',
        name: 'ManageLeave',
        component: ManageLeave,
      },
      {
        path: 'paychecks',
        name: 'Paychecks',
        component: Paychecks,
      },
      {
        path: 'calendar',
        name: 'Calendar',
        component: Calendar,
      },
      {
        path: 'attendance',
        name: 'Attendance',
        component: Attendance,
      },
      // Add more employee routes as needed
    ],
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
