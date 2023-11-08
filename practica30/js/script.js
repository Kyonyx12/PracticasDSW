// var numero1 = 2;
// var numero2 = 3;

//var resultado;

// function suma_y_muestra(){
//     resultado = numero1 + numero2;
//     alert("El resultado es "+ resultado);
// }

//suma_y_muestra();

// function suma_y_muestra(primerNumero, segundoNumero){
//     var resultado = primerNumero + segundoNumero;
//     alert("El resultado es "+ resultado);
// }

// suma_y_muestra(numero1,numero2);

// function suma_y_muestra(){
//     return numero1 + numero2;
// }

// alert("El resultado es "+suma_y_muestra());


function parImpar(numero){
    if(numero%2==0){
        alert("El numero es par");
    } else {
        alert("El numero es impar");
    }
}

var numero = prompt("Ingrese un numero");

parImpar(numero);

function avisoDeHuracan(hayUnHuracan){
    if(hayUnHuracan){
        alert("Hay un huracan");
    } else {
        alert("Esta soleado");
    }
}

avisoDeHuracan(true);
avisoDeHuracan(false);

function operacionMatematicas(operacion,a,b){
    var resultado;

    switch(operacion){
        case "suma":
            resultado = a + b;
            alert(resultado);
        break;
        case "resta":
            resultado = a - b;
            alert(resultado);
        break;
        case "multiplicacion":
            resultado = a * b;
            alert(resultado);
        break;
        case "division":
            resultado = a / b;
            alert(resultado);
        break;
        case "residuo":
            resultado = a % b;
            alert(resultado);
        break;
        default:
            resultado = 0;
            alert(resultado);
            return 0; 
    }
}

operacionMatematicas("suma",2,3);
operacionMatematicas("resta",2,3);
operacionMatematicas("multiplicacion",2,3);
operacionMatematicas("division",2,3);
operacionMatematicas("residuo",2,3);
operacionMatematicas("error",2,3);