// for (var i=0;i<10;i++){

//     console.log("Hola mundo");

// }

// var i = 10;

// while (i<= 20){
//     console.log(i);
//     i = i + 2;
// }

// do{
//     i += 1;
//     console.log(i);
// } while(i < 5);

//1
var arreglo = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
for(var i = 0;i<arreglo.length;i++){
    console.log(arreglo[i]);
}
arreglo.pop(); //Elimina el ultimo elemento, domingo

console.log(arreglo);

arreglo.push("Domingo"); //Agrea al final el elemento, domingo

console.log(arreglo);

//2
var x = 1;
var suma=0;

while(x<=5){
 
 suma+=x;
 x++;

}

console.log(suma);

//3
var y=1;
var fact=1;

do{
    fact*=y;
    y++;
}while(y<=5);

console.log(fact);