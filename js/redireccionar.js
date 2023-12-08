function redireccionar(){
    var scrollToTopButton = document.getElementById("scrollToTopButton");

    scrollToTopButton.addEventListener("click", function(){
        window.location.href = "https://api.whatsapp.com/send/?phone=%2B528712516480&text&type=phone_number&app_absent=0";
    });
}
redireccionar();