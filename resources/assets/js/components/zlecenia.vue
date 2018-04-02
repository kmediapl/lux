<template>
  <div>
<v-card>
  <v-card-title>
      Nutrition
      <v-spacer></v-spacer>
      <v-text-field
        append-icon="search"
        label="Szukaj"
        single-line
        hide-details
        v-model="search"
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :search="search"
       :headers="headers"
       :items=posts
        hide-actions
        class="elevation-1"
     >
       <template slot="items" slot-scope="props">
         <td>{{ props.item.nazwa }}</td>

         <td class="text-xs-right">{{ props.item.opis }}</td>
         <td>dsadas</td>
<td>edytuj | usuń</td>

       </template>
     </v-data-table>








</v-card>
</div>
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
       search: '',
      posts: [],
      errors: [],
      headers: [
         {
           text: 'Nazwa zlecenia',
           align: 'left',

           value: 'nazwa'
         },
         { text: 'Opis', value: 'opis' },
         { text: 'Fat (g)',    },
          { text: 'Akcja',    }

       ],
      items: []
    }
  },

  // Fetches posts when the component is created.
  created() {
    axios.get(`http://127.0.0.1:8000/api/zlecenia/`)
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
  }
}
</script>
