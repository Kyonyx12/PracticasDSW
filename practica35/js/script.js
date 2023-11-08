function aparecer() {
  var select = document.getElementById("camisa");
  var tr = document.getElementById("talla-tr");

  if (select.selectedIndex == 0) {
    tr.classList.remove("talla");
    tr.classList.remove("talla");
  } else {
    tr.classList.add("talla");
    tr.classList.add("talla");
  }
}
