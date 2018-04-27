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
           <v-card  >11
                            <div v-if=image>
                              <img :src="image" class="img-responsive" height="70" width="90">
                            </div>
                           </v-card>
             <input type="file" @change="onImageChange"/>
             <v-btn @click="uploadImage"> Upload</v-btn>
<!-- <upload-btn title="Dodaj zdjęcia do zlecenia" fileChangedCallback="handleFileChang()"></upload-btn> -->
   <v-card-text>{{posts.opis}}</v-card-text>
     </v-card>
 </v-container>
</template>

<script>
import axios from 'axios';


export default {
    data: function() {
    return {
        props:['id'],
         posts: [],
       
         image:''
  
    }
  },
 
    methods: {
             onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            uploadImage(){
                axios.post('http://127.0.0.1:8000/appmobile/pliki',{image: this.image, id_zlec:this.posts.id}).then(response => {
                   console.log(response);
                });

            }
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
