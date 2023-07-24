function cerrarMenu() {
    var check = document.getElementById("check");
    check.checked = false; // Desactiva el check del menú desplegable
  }

  // Header fixed cuando se abre el check

  function toggleHeaderFixed() {
    var check = document.getElementById("check");
    var header = document.getElementById("hdr");
  
    if (check.checked == true) {
      header.classList.remove("fixed"); // Agrega la clase "fixed" al header
    } else {
      header.classList.add("fixed"); // Remueve la clase "fixed" del header
    }
  }
  
  