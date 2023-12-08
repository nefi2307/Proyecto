document.addEventListener("DOMContentLoaded", function(){
function mostrarMensaje(){
    var mensajeEmergente = document.getElementById("mensajeEmergente");
    mensajeEmergente.style.display = "block";
}
function ocultarMensaje(){
    var mensajeEmergente = document.getElementById("mensajeEmergente");
    mensajeEmergente.style.display = "none";
}



var scrollToTopButton = document.getElementById("scrollToTopButton");
scrollToTopButton.style.zIndex = "999";
scrollToTopButton.addEventListener("mouseout", ocultarMensaje);
scrollToTopButton.addEventListener("mouseover", mostrarMensaje);

});