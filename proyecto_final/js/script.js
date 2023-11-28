// Esta función controla la aparición de un campo de talla según la selección de camisa
function aparecer() {
  var select = document.getElementById("camisa");
  var tr = document.getElementById("talla-tr");

  if (select.selectedIndex == 0) {
    tr.classList.remove("talla"); // Si se elige 'SI' para camisa, se muestra el campo de talla
  } else {
    tr.classList.add("talla"); // Si se elige 'NO' para camisa, se oculta el campo de talla
  }
}

// Función para validar los datos del formulario
function validarDatos() {
  var nombre = document.getElementById("nombre").value;
  var apellidos = document.getElementById("apellidos").value;
  var edad = document.getElementById("edad").value;

  var regex = /^[A-Za-z\s]+$/; // Expresión regular para validar letras y espacios en nombre y apellidos
  var regexEdad = /^\d+$/; // Expresión regular para validar números en la edad

  if (!regex.test(nombre)) {
    alert("El campo NOMBRE solo debe contener letras.");
    document.getElementById("nombre").value = "";
    return false;
  }

  if (!regex.test(apellidos)) {
    alert("El campo APELLIDOS solo debe contener letras.");
    document.getElementById("apellidos").value = "";
    return false;
  }

  if (!regexEdad.test(edad)) {
    alert("El campo EDAD solo debe contener números.");
    document.getElementById("edad").value = "";
    return false;
  }

  convertirAMayusculas(); // Convierte algunos campos a mayúsculas
  return true;
}

// Función para convertir algunos campos a mayúsculas
function convertirAMayusculas() {
  var nombre = document.getElementById("nombre");
  var apellidos = document.getElementById("apellidos");
  var comentarios = document.getElementById("comentarios");

  nombre.value = nombre.value.toUpperCase();
  apellidos.value = apellidos.value.toUpperCase();
  comentarios.value = comentarios.value.toUpperCase();
}

// Selección de tarjetas en el área de visualización
const wrapper = document.querySelector('.cards-wrapper');
const dots = document.querySelectorAll('.dot');
let activeDotNum = 0;

dots.forEach((dot, idx) => {  
  dot.setAttribute('data-num', idx);
  
  dot.addEventListener('click', (e) => {
    let clickedDotNum = e.target.dataset.num;
    if(clickedDotNum == activeDotNum) {
      return;
    }
    else {
      let displayArea = wrapper.parentElement.clientWidth;
      let pixels = -displayArea * clickedDotNum
      wrapper.style.transform = 'translateX('+ pixels + 'px)';
      dots[activeDotNum].classList.remove('active');
      dots[clickedDotNum].classList.add('active');
      activeDotNum = clickedDotNum;
    }
  });
});

// Funciones para confirmar eliminación y modificación de registros
function confirmar(){
  return confirm('¿Estás seguro de que quieres eliminar este registro?');
}

function modificar(){
  return confirm('¿Estás seguro de que quieres modificar este registro?');
}
