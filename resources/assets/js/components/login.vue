<template>
  <v-app id="inspire">
    <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Login form</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-tooltip bottom>
                  <v-btn
                    icon
                    large
                    :href="source"
                    target="_blank"
                    slot="activator"
                  >
                    <v-icon large>code</v-icon>
                  </v-btn>
                  <span>Source</span>
                </v-tooltip>
                <v-tooltip right>
                  <v-btn icon large href="https://codepen.io/johnjleider/pen/wyYVVj" target="_blank" slot="activator">
                    <v-icon large>mdi-codepen</v-icon>
                  </v-btn>
                  <span>Codepen</span>
                </v-tooltip>
              </v-toolbar>
              <v-card-text>
                <v-form >
                  <v-text-field prepend-icon="person" name="email" label="Email" type="text" v-model="logowanie.email"></v-text-field>
                  <v-text-field prepend-icon="lock" name="password" label="Password" id="password" type="password" v-model="logowanie.password"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" v-on:click="zaloguj">Login</v-btn>
              </v-card-actions>
           
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import axios from 'axios';
  export default {
    data: () => ({
       
        logowanie: {
            email:'',
            password:''
        },
      drawer: null
    }),
    props: {
      source: String
    },
    methods: {
       zaloguj: function () {
      //alert(this.logowanie.login+this.logowanie.password),
        axios.post('/login',{email:this.logowanie.email,password:this.logowanie.password})
        .then(response => {
            console.log(response)
           // window.location.href = "http://localhost:8000/zlecenia"
        })
    .catch(e => {
      this.errors.push(e)
    })
        

      this.logowanie.email='',
      this.logowanie.password = ''
    }
    }

  }
</script>
