document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("slider");
    const btnIzquierda = document.getElementById("btn-izquierda");
    const btnDerecha = document.getElementById("btn-derecha");
  
    let currentIndex = 0;
  
    btnDerecha.addEventListener("click", function () {
      nextSlide();
    });
  
    btnIzquierda.addEventListener("click", function () {
      prevSlide();
    });
  
    function nextSlide() {
      currentIndex = (currentIndex + 1) % slider.children.length;
      updateSliderPosition();
    }
  
    function prevSlide() {
      currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
      updateSliderPosition();
    }
  
    function updateSliderPosition() {
      const offset = -currentIndex * 100 + "%";
      slider.style.transform = "translateX(" + offset + ")";
    }
  
    // Función para cambiar automáticamente las imágenes cada cierto tiempo
    function autoChangeSlide() {
      setInterval(function () {
        nextSlide();
      }, 3000); // Cambia la imagen cada 3 segundos (ajusta según tus necesidades)
    }
  
    // Inicia la función de cambio automático
    autoChangeSlide();
  });
  