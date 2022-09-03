var email;
var password;
var password1;
var username;



document.addEventListener("DOMContentLoaded", function(){
  document.getElementById("registro").addEventListener('submit', validarFormulario);

  function validarFormulario(evento) {
  evento.preventDefault();
  var password = document.getElementById('password').value;
  var hasNumber = /\d/;
  var numero = hasNumber.test(password);
  if(password.length < 8) {
    alert('password must be at least 8 characters');
    return;
  }else if(numero == false){
    alert('pasword need almost 1 number');
  }
})
