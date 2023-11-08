// Declaración de un array que contiene los nombres de las imágenes de las maravillas.
let maravillas = ["chichenitza.svg", "coliseo.svg", "cristo.svg", "machupichu.svg", "muralla.svg", "petra.svg", "tajmahal.svg"];

// Declaración de un array que contiene las respuestas correctas para cada maravilla.
let correcta = [1, 0, 2, 1, 2, 0, 1];

// Declaración de un array multidimensional que contiene opciones para cada maravilla.
let opciones = [];
opciones.push(["Machu Picchu", "Chichen Itza", "Coliseo"]);
opciones.push(["Coliseo", "Petra", "Cristo Redentor"]);
opciones.push(["Muralla China", "Taj Mahal", "Cristo Redentor"]);
opciones.push(["Petra", "Machu Picchu", "Taj Mahal"]);
opciones.push(["Chichen Itza", "Petra", "Muralla China"]);
opciones.push(["Petra", "Machu Pichu", "Chichen Itza"]);
opciones.push(["Coliseo", "Taj Mahal", "Cristo Redentor"]);

// Declaración de variables para seguir el progreso del juego.
let posActual = 0;
let cantidadAcertadas = 0;

// Función para comenzar el juego.
function comenzarJuego() {
    posActual = 0;
    cantidadAcertadas = 0;
    // Ocultar la pantalla inicial y mostrar la pantalla de juego.
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarMaravilla();
}

// Función para cargar una nueva maravilla y sus opciones.
function cargarMaravilla() {
    if (maravillas.length <= posActual) {
        terminarJuego();
    } else {
        limpiarOpciones();
        // Cambiar la imagen y las opciones en la pantalla de juego.
        document.getElementById("imgMaravilla").src = "../img/" + maravillas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
    }
}

// Función para limpiar las opciones (eliminar clases que indican aciertos o errores).
function limpiarOpciones() {
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";
    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

// Función para comprobar la respuesta seleccionada por el usuario.
function comprobarRespuesta(opElegida) {
    if (opElegida == correcta[posActual]) { // Si la opción elegida es correcta.
        // Aplicar clases que indican una respuesta acertada.
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;
    } else {
        // Aplicar clases que indican una respuesta incorrecta y revelar la respuesta correcta.
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    // Avanzar a la siguiente maravilla después de un breve retraso.
    posActual++;
    setTimeout(cargarMaravilla, 1000);
}

// Función para terminar el juego y mostrar la pantalla final.
function terminarJuego() {
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    // Mostrar el número de respuestas correctas e incorrectas.
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = maravillas.length - cantidadAcertadas;
}

// Función para volver al inicio y reiniciar el juego.
function volverAlInicio() {
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}
