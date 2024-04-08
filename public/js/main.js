document.addEventListener('DOMContentLoaded', function() {

    function toggleContenido() {
        var header = document.getElementById('header');
        var main = document.getElementsByTagName('main')[0];
      
        // Alternar la clase 'ocultar'
        header.classList.toggle('ocultar');
      
        // Ajustar el ancho de main según el estado de la clase 'ocultar'
        if (header.classList.contains('ocultar')) {
          main.style.width = '100%';
        } else {
          main.style.width = '80%';
        }
      }
      
      document.getElementById('abrir').addEventListener('click', function() {
        // Llamar a la función toggleContenido() cuando se haga clic en el botón
        toggleContenido();
      });
      
});





