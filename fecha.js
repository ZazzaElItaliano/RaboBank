let usarh2=document.getElementById("fechaHora");
let tiempo= new Date();
let fecha= tiempo.toLocaleDateString();
let hora= tiempo.toLocaleTimeString();
let fechahora= "La fecha es: " + fecha + " y la hora es: " + hora;
usarh2.innerHTML=fechahora;