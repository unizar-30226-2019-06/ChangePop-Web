function error () {

  if(document.getElementById('usuario').value.length == 0 ){
    todo_correcto = false;
  }
    d=document.getElementById("extra");
    e=document.getElementById(id);
    if (e.style.display == 'none' || e.style.display == "") {
      e.style.display = 'block';
      d.innerHTML = 'Ocultar';
    } else {
      e.style.display = 'none';
      d.innerHTML = 'Mostrar';
    }
  }