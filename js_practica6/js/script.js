//4
for(var i = 0;i<8;i++){
    if(i==3){
        console.log("Soy el 4to");
    } else if(i==7){
        console.log("Acabamos de saludar");
    } else {
        console.log("Hola numero"+(i+1));
    }
}

//5
const onceMeses = { enero: 1, febrero: 2, marzo: 3, abril: 4, 
    mayo: 5, junio: 6, julio: 7, agosto: 8, septiembre: 9, 
    octubre: 10, noviembre:11 };

for (const mes in onceMeses) {
  console.log(`${mes}: ${onceMeses[mes]}`);
}

const arregloMeses = ["enero", "febrero", "marzo", "abril", 
    "mayo", "junio", "julio", "agosto", "septiembre", 
    "octubre", "noviembre"];

arregloMeses.forEach((mes) => console.log(mes));

for (let mes of arregloMeses) {
   console.log(mes);
}

//6
for (let mes of arregloMeses) {
    if(mes=="julio"){
        continue;
    } else {
        console.log(mes);
    }
}

var diciembre = "diciembre";

arregloMeses.push(diciembre);

for(var i = 0;i<arregloMeses.length;i++){
   console.log(arregloMeses[i]);
}
