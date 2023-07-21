<script>
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('contenido');

        document.addEventListener('mousemove', function(event) {
            const mouseX = event.clientX;
  
            if (mouseX < 300) { // Cambia el valor para ajustar el punto de activación
            sidebar.style.left = '0';
            content.classList.add('show-sidebar');
            } else {
            sidebar.style.left = '-300px';
            content.classList.remove('show-sidebar');
            }
        });
</script>