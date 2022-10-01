<template>
   <div>
          <div class="wrapper">

           <b-container class="formcontent" fluid>
             <div class="fadein"> 
                <b-img class="icon" :src="require('@/assets/logo.png')" fluid alt="Responsive image"></b-img>
             </div>

            <div>
             
              <b-row class="my-1">
               <b-col sm="3">
                 <label > Usuario: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="text" v-model="for_registrar.name"></b-form-input> 
               </b-col>
            </b-row>
            <b-row class="my-1">
               <b-col sm="3">
                 <label > Email: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="email" v-model="for_registrar.email"></b-form-input>
               </b-col>
            </b-row>

            <b-row class="my-1">
               <b-col sm="3">
                 <label > Nombre: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="text" v-model="for_registrar.nombre"></b-form-input> 
               </b-col>
            </b-row>

            <b-row class="my-1">
               <b-col sm="3">
                 <label > Apellido: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="text" v-model="for_registrar.apellido"></b-form-input> 
               </b-col>
            </b-row>

            <b-row class="my-1">
               <b-col sm="3">
                 <label > Direccion: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="text" v-model="for_registrar.direccion"></b-form-input> 
               </b-col>
            </b-row>

            
            <b-row class="my-1" >
               <b-col sm="3">
                 <label > Password: </label>
               </b-col>
               <b-col sm="9">
                 <b-form-input id="" type="password" v-model="for_registrar.password"></b-form-input>
               </b-col>
            </b-row>
            </div>

            <b-button pill @click="registrado()" variant="outline-secondary">Registrarse</b-button>


         </b-container>
        </div>
    </div>

</template>


<script>
    import Axios from 'axios'
    export default{
        name:'registrarse',
        data(){
            return{
              for_registrar:{ 
                    name:null,
                    email:null,
                    nombre:null,
                    apellido:null,
                    direccion:null,
                    password:null
                  }
                }
        },
        components:{},

        methods:{
           registrado()
           {
           this.Axios.post("http://127.0.0.1:8000/api/users_register",this.for_registrar)
           .then(data=>{
            console.log(data)
            this.$router.push("/login")
          }).catch(error=> {console.log(error)})
           alert("Se registro correctamente")
           }
    
        },//funciones ejecucion de algo
        computed:{
    
        },//para generar operar
        mounted(){
              
        }//se utiliza cuando se carga la pagina
    }
    </script>


<style>

    .wrapper{
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 80%;
        height: 80%;
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