<template>
  <v-sheet width="300" class="mx-auto">
    <v-form fast-fail @submit.prevent="register">
      <div v-if="message === 'error'">Invalid response</div>
      <div v-if="message === 'passwordMismatch'">Passwords do not match</div>

      <v-text-field v-model="username" label="Username"></v-text-field>
      <v-text-field v-model="password" label="Password" type="password"></v-text-field>
      <v-text-field v-model="passwordConfirm" label="Password Confirm" type="password"></v-text-field>

      <v-btn type="submit" block class="mt-2">Submit</v-btn>

    </v-form>
  </v-sheet>
</template>

<script>
import router from '@/router';
import axios from 'axios';

export default {
  data() {
    return {
      username: '',
      password: '',
      passwordConfirm: '',
      message: [],
    };
  },
  methods: {
    async register() {
      if (this.password === this.passwordConfirm) {
        try {
          const response = await axios.post("api/signin", {
            username: this.username,
            password: this.password
          });


          const userId = response.data.data.userId;
          const role = response.data.data.role;

          // Save user ID and role to local storage
          localStorage.setItem('userId', userId);
          localStorage.setItem('role', role);

          console.log('Redirecting based on role:', role);

          if (role.toLowerCase() === 'employee') {
            console.log('Redirecting to /Employee');
            router.push('/Employee');
          } else if (role.toLowerCase() === 'admin') {
            console.log('Redirecting to /Admin');
            router.push('/Admin');
          } else {
            console.log('Redirecting to /default-page');
            router.push('/default-page');
          }


          alert("Registration and Login successfully");

        } catch (error) {
          console.error('Registration error:', error);
          // Handle registration error and provide user feedback if needed
        }
      } else {
        this.message = "passwordMismatch";
      }
    }



  }
};
</script>
