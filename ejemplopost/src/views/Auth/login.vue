<template>
     <div>
          <div class="wrapper">

           <b-container class="formcontent" fluid>
             <div class="fadein"> 
                <b-img class="icon" :src="require('@/assets/logo.png')" fluid alt="Responsive image"></b-img>
             </div>

            <div>

            <b-row class="my-1" >
               <b-col sm="3">
                 <label > Usuario: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="text" v-model="user.name"></b-form-input> 
               </b-col>
            </b-row>
            <b-row class="my-1" >
               <b-col sm="3">
                 <label > Email: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="email" v-model="user.email"></b-form-input>
               </b-col>
            </b-row>

            <b-row class="my-1" >
               <b-col sm="3">
                 <label > Password: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="password" v-model="user.password"></b-form-input>
               </b-col>
            </b-row>
            </div>

            <b-button  variant="outline-secondary" pill @click="aceptar()">Aceptar</b-button>


         </b-container>
        </div>
    </div>
</template>

<script>

import Axios from 'axios'

export default {
    name:'login',
    data(){
        return{
            user:{
                name:null,
                email:null,
                password:null,
                }
            
           }
    },
    components:{},
    methods:{
      aceptar()
       {
         this.axios.get('http://127.0.0.1:8000/api/users_logueo',this.user).then(response=>{
         this.$router.push("/dashboard")
         })
         alert("Ingreso correctamente")
       }
    },//funciones ejecucion de algo
    //para generar operar
    mounted: function(){
      this.aceptar()
    },//se utiliza cuando se carga la pagina
    computed:{}
}
</script>





<style>

.wrapper{
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100%;
    padding: 20px;
}
.formcontent{
background: rgb(25, 62, 94);
 padding: 30px;
 width: 40%;
 max-width: 500px;
 position: relative;
 -webkit-box-flex:0 60px 60px 0 rgba(0, 0, 0, 0.434);
 }
 .my-1{
    color: black;
 }
</style>
