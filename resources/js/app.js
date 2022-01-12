import Vue from 'vue'
import PostComponent from "./components/PostComponent"
require('./bootstrap');

const app = new Vue({
    el:'#app',
    components:{
        
        PostComponent

    }
})


// window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);



// const app = new Vue({
//     el: '#app',
// });
