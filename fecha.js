let usarh2=document.getElementById("fechaHora");
let tiempo= new Date();
var opcionesFecha = { weekday: 'long', 
                      year: 'numeric', 
                      month: 'long', 
                      day: 'numeric' };


let fecha= tiempo.toLocaleDateString("es-ES" , opcionesFecha);
let hora= tiempo.toLocaleTimeString();
let fechahora= "La fecha es: " + fecha + " y la hora es: " + hora;
usarh2.innerHTML=fechahora;