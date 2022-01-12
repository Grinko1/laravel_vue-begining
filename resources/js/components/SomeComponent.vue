<template>
<div>

<div>Color: {{obj.color}}</div>
<div>number:{{obj.number}} </div>
  

  </div>
</template>
<script>


export default ({
   name : "SomeComponent",

       data(){
         return{}
     },
     props:[
       'obj'
     ],
      mounted(){

      },
    
       methods:{
    
           },
          
})
</script>

<style lang="sss" scoped>

</style>