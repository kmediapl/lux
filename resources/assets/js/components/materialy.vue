<template>
  <div>
        <ul v-if="errors && errors.length">
    <li v-for="error of errors">
      {{error.message}}
    </li>
  </ul>
      <v-btn v-on:click="dodajwiersz">Dodaj</v-btn>
      <table class="table">
          <thead>
              <th>Nazwa materiału
              </th>
               <th>Ilość
              </th>
               <th>Cena zakupu
              </th>
               <th>Cena dla klienta
              </th>
               <th>___
              </th>
          </thead>
          <tr>
              <td>-</td> <td>-</td
              ><td>-</td> 
              <td>-</td>
              <td><button class="ui orange icon button" @click="dodajwiersz">
  <i class="add icon"></i>
</button></td>
          </tr>
        <tr v-for="(wiersz, index) in wiersze">  
            <!-- <td>
            
            <select v-model="materialy">
                <option>dsadas</option>
                <option v-for="material in  posts"> {{material.title}}</option>
            </select>

        
          
            </td> -->
            <td><input v-model="wiersz.nazwa" type="text" placeholder="Ilość"></td>
            <td><input v-model="wiersz.cena" type="text" placeholder="Cena zakupu"></td>
            <td><input v-model="wiersz.ilosc" type="text" placeholder="Cena dla klienta"></td>
            <td><input v-model="wiersz.cenakl" type="text" placeholder="Cena dla klienta"></td>
             <td><button class="ui orange icon button" @click="dodajwiersz">
  <i class="add icon"></i>
</button></td>
            </tr>
      </table>
      <!-- <ul>
         <li v-for="material in  posts"> {{material.title}}</li>
      </ul> -->
  </div>
</template>

<script>
import axios from 'axios';
export default {
   data: function() {
    return {
        wiersze:[],
    materialy:[],
    posts: [],
    errors: []
    }
  },
   created() {
    axios.get(`http://jsonplaceholder.typicode.com/posts`)
    .then(response => {
      // JSON responses are automatically parsed.
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

    // async / await version (created() becomes async created())
    //
    // try {
    //   const response = await axios.get(`http://jsonplaceholder.typicode.com/posts`)
    //   this.posts = response.data
    // } catch (e) {
    //   this.errors.push(e)
    // }
  },

    mounted() {
        this.test123()
    },

    methods: {
        test123: function(){
        console.log('Zamontowany')
    },
        dodajwiersz: function(){
           this.wiersze.push({
               nazwa:'',
               ilosc:'',
               cena:null,
               cenakl:null
           });
            // this.wiersze=''
        },
        zapisz: function(){
             axios.post('/user', {
    firstName: 'Fred',
    lastName: 'Flintstone'
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });

        }

    }
    
    
}
</script>

<style>

</style>
