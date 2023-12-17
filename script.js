document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('nav ul');

    // Toggle del menú en dispositivos móviles
    navToggle.addEventListener('click', function () {
        navMenu.classList.toggle('show');
    });

    // Desplazamiento suave al hacer clic en los enlaces del menú
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            window.scrollTo({
                top: targetElement.offsetTop - 50,
                behavior: 'smooth'
            });

            // Cierra el menú en dispositivos móviles
            navMenu.classList.remove('show');
        });
    });
});



document.addEventListener('DOMContentLoaded', function () {
    // Función para calcular el desplazamiento de paralaje
    function parallaxScroll() {
        const parallaxSections = document.querySelectorAll('.parallax-section');

        parallaxSections.forEach(function (section) {
            const sectionTop = section.getBoundingClientRect().top;
            const speed = section.getAttribute('data-speed');

            section.style.backgroundPositionY = -sectionTop * speed + 'px';
        });
    }

    // Llama a la función de paralaje cuando se desplaza la página
    window.addEventListener('scroll', parallaxScroll);
});



document.addEventListener("DOMContentLoaded", () => {
    const acercaDeMi = document.querySelector("#acerca-de-mi");

    window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY;
        const sectionPosition = acercaDeMi.offsetTop;
        const windowHeight = window.innerHeight;

        if (scrollPosition + windowHeight >= sectionPosition + 100) {
            acercaDeMi.style.opacity = "1";
            acercaDeMi.style.transform = "translateY(0)";
        }
    });
});


document.addEventListener("DOMContentLoaded", () => {
    const acercaDeMi = document.querySelector("#acerca-de-mii");
    const despedida = document.querySelector("#despedida");
    const message = document.querySelector(".message");

    // Función para mostrar la despedida
    function showDespedida() {
        acercaDeMi.style.display = "none";
        despedida.style.display = "block";
    }

    // Mostrar la despedida automáticamente después de 5 segundos
    setTimeout(showDespedida, 5000);
});




document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.querySelector("#formulario-contacto");

    formulario.addEventListener("submit", (e) => {
        e.preventDefault();

        // Validar el formulario antes de enviar
        if (validarFormulario()) {
            // Aquí puedes agregar el código para enviar el formulario, como una solicitud AJAX.
            alert("Formulario enviado con éxito.");
            formulario.reset();
        }
    });

    function validarFormulario() {
        const nombre = document.querySelector("#nombre").value.trim();
        const email = document.querySelector("#email").value.trim();
        const mensaje = document.querySelector("#mensaje").value.trim();

        if (nombre === "" || email === "" || mensaje === "") {
            alert("Por favor, complete todos los campos.");
            return false;
        }

        if (!validarEmail(email)) {
            alert("Por favor, ingrese una dirección de correo electrónico válida.");
            return false;
        }

        return true;
    }

    function validarEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
});


//mapa funcion
function initMap() {

    var macc = {lat: 42.1382114, lng: -71.5212585};

    var map = new google.maps.Map(

        document.getElementById('map'), {zoom: 15, center: macc});

    var marker = new google.maps.Marker({position: macc, map: map});

  }


  //////

    const boton = document.getElementById("boton");
  
    // Función para aplicar el giro al botón
    function aplicarGiro() {
      boton.style.transform = "rotate(180deg)"; // Rota el botón 180 grados (ajusta según tu preferencia)
    }
  
    // Función para restaurar la rotación original del botón
    function restaurarBoton() {
      boton.style.transform = "rotate(0deg)"; // Vuelve a la rotación original
    }
  
    // Escuchar el evento hover en el botón y ejecutar el efecto de giro
    boton.addEventListener("mouseenter", aplicarGiro);
  
    // Escuchar el evento de salida del cursor y restaurar el botón a su estado original
    boton.addEventListener("mouseleave", restaurarBoton);
  







    


