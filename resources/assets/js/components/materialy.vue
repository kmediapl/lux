<template>
  <div>
        <ul v-if="errors && errors.length">
    <li v-for="error of errors">
      {{error.message}}
    </li>
  </ul>
      <span v-on:click="dodajwiersz">Dodaj</span>
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
          </thead>
        <tr v-for="(wiersz, index) in wiersze">  <td>
            
            <select v-model="materialy">
                <option>dsadas</option>
                <option v-for="material in  posts"> {{material.title}}</option>
            </select>

        
            
            </td>
            <td><input type="text" placeholder="Ilość"></td>
            <td><input type="text" placeholder="Cena zakupu"></td>
            <td><input type="text" placeholder="Cena dla klienta"></td>
            </tr>
      </table>
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
               nazwa:null,
               ilosc:null,
               cena:null,
               cenakl:null
           })
        }

    }
    
    
}
</script>

<style>

</style>
