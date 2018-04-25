<template>
 <v-container>
     <v-card dark>
       <v-card-title primary-title>
           <h3 class="headline mb-0">{{posts.nazwa}}</h3>
            </v-card-title>
      <v-spacer></v-spacer>
      <v-card-text>{{posts.data_rozpoczecia}}</v-card-text>
      <v-card-text>{{posts.data_zakonczenia}}</v-card-text>
      <v-card-text>{{posts.rodzaj_uslugi}}</v-card-text>

      <v-card-text>{{posts.rodzaj_instalacji}}</v-card-text>
      <v-card-text>{{posts.kilometry}}</v-card-text>
      <v-card-text>{{posts.kilometry_koszt}}</v-card-text>
      <v-card-text>{{posts.czy_zrealizowane}} ::       <v-btn small color="error">Zrealizuj zlecenie</v-btn></v-card-text>
           <v-card-text>{{posts.kto_zrealizowal}}</v-card-text>
<upload-btn title="Dodaj zdjęcia do zlecenia"></upload-btn>
   <v-card-text>{{posts.opis}}</v-card-text>
     </v-card>
 </v-container>
</template>

<script>
import axios from 'axios';
  import UploadButton from 'vuetify-upload-button';

export default {
    data: function() {
    return {
        props:['id'],
         posts: [],
         id:'',
         linki:''
  
    }
  },
  components: {
      'upload-btn': UploadButton
    },
    created() {
        let linki='12'
    axios.get(`http://127.0.0.1:8000/api/mojezlecenia/dane/`+this.$route.params.id)
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

<style>

</style>
