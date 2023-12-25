<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="8" md="6">
                <v-card>
                    <v-card-title class="text-h5">Sign Up</v-card-title>
                    <v-card-text>
                        <v-form @submit.prevent="signup">
                            <v-text-field v-model="firstname" label="first name"></v-text-field>
                            <v-text-field v-model="lastname" label="last name"></v-text-field>
                            <v-text-field v-model="username" label="Username"></v-text-field>
                            <v-text-field v-model="password" label="Password" type="password"></v-text-field>
                            <v-select v-model="role" :items="roles" label="Role"></v-select>

                            <v-row justify="center">
                                <v-btn type="submit" color="primary">Sign Up</v-btn>
                            </v-row>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>
  
<script>
import axios from 'axios';

export default {
    data() {
        return {
            username: '',
            password: '',
            role: 'Employee', // Default role
            roles: ['Admin', 'Employee'], // Available roles
            firstname: "",
            lastname: "",

        };
    },
    methods: {
        signup() {
            // Prepare the user data
            const userData = {
                username: this.username,
                password: this.password,
                firstname: this.firstname,
                lastname: this.lastname,

                role: this.role,
            };
            // Clear input fields on successful registration


            // Send a POST request to your backend API
            axios.post('/signup', userData)
                .then(response => {
                    // Handle success
                    console.log('Signup successful:', response.data);


                    this.username, '';
                    this.password, '';
                    this.firstname, '';
                    this.lastname, '';
                })
                .catch(error => {
                    // Handle error
                    console.error('Signup error:', error);
                });
        },
    },
};
</script>
  
<style scoped>
/* Add your custom styles here */
</style>
  