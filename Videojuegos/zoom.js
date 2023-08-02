// Obtener el modal
var modal = document.getElementById("myModal");

// Obtener todas las imágenes con la clase "myImg"
var images = document.getElementsByClassName("myImg");

// Obtener el elemento <span> que cierra el modal
var span = document.getElementsByClassName("close")[0];

// Función para abrir el modal y mostrar la imagen seleccionada
function showModal() {
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Función para cerrar el modal
function closeModal() {
  modal.style.display = "none";
}

// Asignar eventos onclick a todas las imágenes
for (var i = 0; i < images.length; i++) {
  images[i].onclick = showModal;
}

// Asignar evento onclick al botón de cierre del modal
span.onclick = closeModal;
