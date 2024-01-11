function mostrar() {
    document.getElementById('menu-desplegable').classList.add('open')
}
function ocultar() {
    document.getElementById('menu-desplegable').classList.remove('open')
}


//BOTÓN//
function toggleInformacion() {
  var informacionDiv = document.getElementById('informacionAdicional');
  var boton = document.querySelector('.boton');

  if (informacionDiv.style.display === 'none') {
    informacionDiv.style.display = 'block';
    boton.textContent = 'VER MENOS';
  } else {
    informacionDiv.style.display = 'none';
    boton.textContent = 'VER MÁS';
  }
}


/*PRODUCTOS*/
function mostrarInformacion(event, imagenId) {
  const imagenInfo = document.getElementById(`imagen${imagenId}-info`);
  const boton = event.target;

  if (imagenInfo.style.display === 'block') {
    imagenInfo.style.display = 'none';
    boton.textContent = 'Ver más';
  } else {
    const secciones = document.querySelectorAll('.imagen-info');
    secciones.forEach(seccion => {
      seccion.style.display = 'none';
    });
    imagenInfo.style.display = 'block';
    boton.textContent = 'Ver menos';
  }
}