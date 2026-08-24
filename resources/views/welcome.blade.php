<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('icon.ico') }}">
    <title>Mi Portafolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-new h-screen text-slate-900 flex ">
    
    <div >
        <div id="title" class=" bg-whiteflatt " >
            <div class="mx-2 bg-[#4b90ff] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#00ffbb] ">p</div>
            <div class="m-2 bg-[#ff0055] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#cc70d8]">o</div>
            <div class="mx-2 bg-[#00ffbb] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#8c00ff]">r</div>
            <div class="mx-2 bg-[#0dcc02] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#4b90ff]">t</div>
            <div class="m-2 bg-[#ffe600] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#d31290]">a</div>
            <div class="mx-2 bg-[#ff8800] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#ffe600]">f</div>
            <div class="m-2 bg-[#d31290] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#00a8fc]">o</div>
            <div class="mx-2 bg-[#cc70d8] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#ff8800]">l</div>
            <div class="mx-2 bg-[#8c00ff] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#0dcc02]">i</div>
            <div class="m-2 bg-[#00a8fc] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#ff0055]">o</div>
        </div>

        <div id="about" class="bg-whiteopacity">
            <h1 class="title">Acerca de mi</h1>
            <p class="text-xl text-justify">
                Tengo interés en el diseño centrado en el usuario, el desarrollo frontend y la integración de arte y tecnología.
                Me apasiona crear soluciones digitales intuitivas, funcionales y visualmente atractivas. He trabajado en proyectos académicos donde he combinado habilidades técnicas con herramientas de diseño como Figma ,Canva, photoshop.
                Intereses: diseño de interfaces, accesibilidad web, creatividad digital, innovación social, desarrollo web.
            </p>
        </div>

        <div id="proyects" class="order">
            <div id="p1" class="bg-whiteopacity2">
                <a href="/proyecto1">
                    <img src="/images/p1/img_p1.webp" class="imgsize" alt="Imagen del proyecto" >
                    <h1 class="subtitle">Sistema Web Web Full-Stack para Gestión y Pedidos de Pizzería</h1>
                    <p class="text-xl text-justify pl-2 pr-2">
                    Desarrollo de un sistema web para una pizzería, permitiendo a los clientes realizar pedidos en línea y a los administradores gestionar el inventario, los pedidos y la información de los clientes.
                    </p>
                </a>
            </div>
            <div id="p2" class="bg-whiteopacity2">
                <a href="/proyecto2">
                    <img src="/images/p2/img_m5.webp" class="imgsize" alt="Imagen del proyecto" >
                    <h1 class="subtitle">App de recordatorio de medicinas| Desarrolladora Full-stack</h1>
                    <p class="text-xl text-justify pl-2 pr-2">
                    Creación de una aplicación móvil hibrida para recordar la medicación de una persona mediante notificaciones y un registro sencillo de horarios.
                    </p>
                </a>
            </div>

            <div id="p4" class="bg-whiteopacity2 pl-2 pr-2">
                <a href="/proyecto4">
                    <img src="/images/p4/img_r1.webp" class="imgsize" alt="Imagen del proyecto" >
                    <h1 class="subtitle">App recetario</h1>
                    <p class="text-xl text-justify">
                    Desarrollo de la aplicación fue construida con el framework Ionic y el entorno Vue 3, aprovechando componentes modernos e interfaces responsivas para brindar una experiencia fluida tanto en dispositivos móviles como en entornos web.
                    </p>
                </a>
            </div>
            <div id="p5" class="bg-whiteopacity2">
                <a href="/proyecto5">
                    <img src="/images/p5/img_w1.webp" class="imgsize" alt="Imagen del proyecto" >
                    <h1 class="subtitle">Diseño de pagina web</h1>
                    <p class="text-xl text-justify pl-2 pr-2">
                    Diseño y planeación de una página web, utilizando herramientas de diseño como Figma y Canva para crear una interfaz atractiva y funcional.
                    </p>
                </a>
            </div>
        </div>
        <footer class="bg-[#adadad] text-black text-center p-4">
    <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
</footer>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const carrusel = document.querySelector(".order");
    const tarjeta = document.querySelector(".bg-whiteopacity2");

    setInterval(() => {

        const paso = tarjeta.offsetWidth + 24;

        if (carrusel.scrollLeft + carrusel.clientWidth >= carrusel.scrollWidth - 5) {

            carrusel.scrollTo({
                left: 0,
                behavior: "smooth"
            });

        } else {

            carrusel.scrollBy({
                left: paso,
                behavior: "smooth"
            });

        }

    }, 3000);

});
</script>
</body>

</html>