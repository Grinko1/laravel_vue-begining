<template>
<div>
  <!-- <h3>Add Person</h3> -->
  <div class="mb-3 row w-25" >
    
    <div class="col-sm-10">
      <input type="text"  class="form-control mb-3" v-model="name" id="name" placeholder="name" >
    </div>
       <div class="col-sm-10">
      <input type="number"  class="form-control mb-3" v-model="age" id="age" placeholder="age"  >
    </div>
       <div class="col-sm-10">
      <input type="text"  class="form-control mb-3" v-model="job" id="job" placeholder="job">
    </div>

      <div class="col-sm-10">
      <input  @click.prevent="addPerson"  class="btn btn-primary" value="Add">
    </div>
  </div>
 
  <SomeComponent :obj="obj"></SomeComponent>

  </div>
</template>
<script>
import SomeComponent from './SomeComponent.vue'

export default ({
   name : "CreateComponent",
   components:{
     SomeComponent
   },

       data(){
     return {
       name:null,
       age: null,
       job:null,
       obj:{
         color : 'color',
         number : '32'
       }
     }
       },
    
       methods:{
       addPerson(){
      
       axios.post('/api/people', {name: this.name , age: this.age, job:this.job})
       .then(res =>{
         this.name = null
          this.age = null
           this.job = null
         this.$parent.$refs.index.getPeople()
       })
       },
     
           },
          
})
</script>

<style lang="sss" scoped>

</style>