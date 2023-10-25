function promedio(){
    var asignatura1 = parseInt(document.getElementById("Matematicas").value);
    if(document.getElementById("Matematicas").value==""){
        document.getElementById("Matematicas").focus();
        return;
    }
    var nombreAsignatura1 = document.getElementById('label1').textContent;

    var asignatura2 = parseInt(document.getElementById("Ingles").value);
    if(document.getElementById("Ingles").value==""){
        document.getElementById("Ingles").focus();
        return;
    }
    var nombreAsignatura2 = document.getElementById('label2').textContent;

    var asignatura3 = parseInt(document.getElementById("Informatica").value);
    if(document.getElementById("Informatica").value==""){
        document.getElementById("Informatica").focus();
        return;
    }
    var nombreAsignatura3 = document.getElementById('label3').textContent;
    
    var asignatura4 = parseInt(document.getElementById("Javascript").value);
    if(document.getElementById("Javascript").value==""){
        document.getElementById("Javascript").focus();
        return;
    }
    var nombreAsignatura4 = document.getElementById('label4').textContent;
   
    var asignatura5 = parseInt(document.getElementById("Redes").value);
    if(document.getElementById("Redes").value==""){
        document.getElementById("Redes").focus();
        return;
    }
    var nombreAsignatura5 = document.getElementById('label5').textContent;
    
    var asignatura6 = parseInt(document.getElementById("Python").value);
    if(document.getElementById("Python").value==""){
        document.getElementById("Python").focus();
        return;
    }
    var nombreAsignatura6 = document.getElementById('label6').textContent;
    
    var asignatura7 = parseInt(document.getElementById("Kotlin").value);
    if(document.getElementById("Kotlin").value==""){
        document.getElementById("Kotlin").focus();
        return;
    }
    var nombreAsignatura7 = document.getElementById('label7').textContent;
    
    var asignatura8 = parseInt(document.getElementById("Administracion").value);
    if(document.getElementById("Administracion").value==""){
        document.getElementById("Administracion").focus();
        return;
    }
    var nombreAsignatura8 = document.getElementById('label8').textContent;

    var asignaturas = [asignatura1,asignatura2,asignatura3,
    asignatura4,asignatura5,asignatura6,asignatura7,asignatura8];

    var nombres = [nombreAsignatura1,nombreAsignatura2,nombreAsignatura3,
    nombreAsignatura4,nombreAsignatura5,nombreAsignatura6,nombreAsignatura7,nombreAsignatura8];

    var total=0;
    var string="";

    for(var i=0;i<8;i++){
        string += `\nEn asignatura ${nombres[i]} has sacado ${asignaturas[i]}`;
        total += asignaturas[i];
    }

    alert(string);

    var promedio = total / 8;
    alert(`Tu promedio final es: ${promedio}`)

    if(promedio >= 85){
        alert("Exentaste el ordinario");
    } else {
        alert("Debes presentar el ordinario");
    }

}