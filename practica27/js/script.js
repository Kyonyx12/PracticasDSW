

var peso;
var opcion;
var peso_tierra=9.807;
var peso_marte=3.71;
var peso_jupiter=24.79;
var resultado;

var peso = prompt("Ingresea un peso en Kg: ");
var opcion = parseInt(prompt("Ingresea una opcion con numero: 1: Marte o 2: Jupiter"));

switch(opcion){
    case 1:
        resultado = peso * (peso_marte / peso_tierra);
        alert("Su peso es: "+resultado+" kgs");
    break;

    case 2:
        resultado = peso * (peso_jupiter/ peso_tierra);
        alert("Su peso es: "+resultado+" kgs");
    break;

    default:
        alert("No existe esa opcion.");
    break;
}

if(opcion==1){
    resultado = peso * (peso_marte / peso_tierra);
    alert("Su peso es: "+resultado+" kgs");
} else if(opcion==2){
    resultado = peso * (peso_jupiter/ peso_tierra);
    alert("Su peso es: "+resultado+" kgs");
} else {
    alert("No existe esa opcion.");
}


