function mostrarMenu(){
  document.getElementsByClassName('menu-desplegable')[0].style.transform="translate(0%)"
}
function ocultarMenu(){
  document.getElementsByClassName('menu-desplegable')[0].style.transform="translate(-105%)"
}

function activarMostrarMenu(){
  document.getElementsByClassName('btn-abrir-menu')[0].onclick=mostrarMenu;
}
activarMostrarMenu()

function activarOcultarMenu(){
  document.getElementsByClassName('btn-cerrar-menu')[0].onclick=ocultarMenu;
}
activarOcultarMenu()
