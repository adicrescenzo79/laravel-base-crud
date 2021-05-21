require('./bootstrap');

Vue.config.devtools = true;
var app = new Vue({
  el: '#comic',
  data: {
    message: 'Hello Vue!',
    cancella: false,
  }
})

console.log('ciao');
