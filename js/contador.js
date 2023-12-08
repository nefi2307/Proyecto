var tpoLim =5*60 ;
var inicioTiempo = new Date();

function contador(){
    // Obtener el objeto del contador 
        var cont = document.getElementById("contador");

        // Obtener tiempo restante
        var tiempoRestante = tpoLim - Math.floor((new Date()- inicioTiempo)/1000);

        // Calcular min y seg a partir del tpo restante
        var minutos = Math.floor(tiempoRestante/60);
        var segundos = tiempoRestante % 60;

        // Reiniciar el tpo
        cont.textContent = ('Tiempo restante ' + minutos <10 ? '0': '') + minutos + ':' + (segundos <10 ? '0' : '') + segundos;

        if(tiempoRestante <=0){
            alert('Tu tiempo de reserva ha terminado. Intentelo de nuevo por favor.');  
            
            clearInterval(intervalo);            
            location.reload();
            window.location.href = 'index.php';
            minutos = 0;
            segundos = 0;
        }
}

var intervalo = setInterval(contador, 1000);

contador();