let usarh2=document.getElementById("fechaHora");
let tiempo= new Date();
let opcionesFecha = { weekday: 'long', 
                      year: 'numeric', 
                      month: 'long', 
                      day: 'numeric' };


let fecha= tiempo.toLocaleDateString("es-ES" , opcionesFecha);
let hora= tiempo.toLocaleTimeString();
let fechahora= "Hoy es: " + fecha + " y la hora es: " + hora;
usarh2.innerHTML=fechahora;