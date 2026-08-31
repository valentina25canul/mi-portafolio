<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('icon.ico') }}">
    <title>Mi Portafolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-new min-h-screen text-slate-900 flex flex-col justify-between">
    
    <main class="w-full max-w-7xl mx-auto px-4 py-8">
        
        <!-- Título principal estilo banner / logo -->
        <div id="title" class="bg-whiteflatt mb-8">
            <div class="mx-1 sm:mx-2 bg-[#4b90ff] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#00ffbb] px-2 rounded">p</div>
            <div class="m-1 sm:m-2 bg-[#ff0055] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#cc70d8] px-2 rounded">o</div>
            <div class="mx-1 sm:mx-2 bg-[#00ffbb] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#8c00ff] px-2 rounded">r</div>
            <div class="mx-1 sm:mx-2 bg-[#0dcc02] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#4b90ff] px-2 rounded">t</div>
            <div class="m-1 sm:m-2 bg-[#ffe600] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#d31290] px-2 rounded">a</div>
            <div class="mx-1 sm:mx-2 bg-[#ff8800] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#ffe600] px-2 rounded">f</div>
            <div class="m-1 sm:m-2 bg-[#d31290] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#00a8fc] px-2 rounded">o</div>
            <div class="mx-1 sm:mx-2 bg-[#cc70d8] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#ff8800] px-2 rounded">l</div>
            <div class="mx-1 sm:mx-2 bg-[#8c00ff] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#0dcc02] px-2 rounded">i</div>
            <div class="m-1 sm:m-2 bg-[#00a8fc] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#ff0055] px-2 rounded">o</div>
        </div>

        <!-- Sección "Acerca de mí" -->
        <div id="about" class="bg-whiteopacity mb-12">
            <h1 class="title">Acerca de mí</h1>
            <p class="text-base sm:text-lg md:text-xl text-justify leading-relaxed">
                Tengo interés en el diseño centrado en el usuario, el desarrollo frontend y la integración de arte y tecnología.
                Me apasiona crear soluciones digitales intuitivas, funcionales y visualmente atractivas. He trabajado en proyectos académicos donde he combinado habilidades técnicas con herramientas de diseño como Figma, Canva y Photoshop.
            </p>
            <p class="text-base sm:text-lg md:text-xl text-justify leading-relaxed mt-4">
                <strong>Intereses:</strong> Diseño de interfaces, accesibilidad web, creatividad digital, innovación social y desarrollo web.
            </p>
        </div>

        <!-- Carrusel de Proyectos -->
        <div id="proyects" class="order">
            
            <div id="p1" class="bg-whiteopacity2 p-4 flex flex-col">
                <a href="/proyecto1" class="h-full flex flex-col">
                    <img src="/images/p1/img_p1.webp" class="imgsize" alt="Imagen del proyecto">
                    <h1 class="subtitle mt-3">Sistema Web Full-Stack para Gestión y Pedidos de Pizzería</h1>
                    <p class="text-sm sm:text-base text-justify px-2 mt-auto">
                        Desarrollo de un sistema web para una pizzería, permitiendo a los clientes realizar pedidos en línea y a los administradores gestionar el inventario, los pedidos y la información de los clientes.
                    </p>
                </a>
            </div>

            <div id="p2" class="bg-whiteopacity2 p-4 flex flex-col">
                <a href="/proyecto2" class="h-full flex flex-col">
                    <img src="/images/p2/img_m5.webp" class="imgsize" alt="Imagen del proyecto">
                    <h1 class="subtitle mt-3">App de recordatorio de medicinas | Desarrolladora Full-stack</h1>
                    <p class="text-sm sm:text-base text-justify px-2 mt-auto">
                        Creación de una aplicación móvil híbrida para recordar la medicación de una persona mediante notificaciones y un registro sencillo de horarios.
                    </p>
                </a>
            </div>

            <div id="p4" class="bg-whiteopacity2 p-4 flex flex-col">
                <a href="/proyecto4" class="h-full flex flex-col">
                    <img src="/images/p4/img_r1.webp" class="imgsize" alt="Imagen del proyecto">
                    <h1 class="subtitle mt-3">App recetario</h1>
                    <p class="text-sm sm:text-base text-justify px-2 mt-auto">
                        Desarrollo de la aplicación construida con el framework Ionic y el entorno Vue 3, aprovechando componentes modernos e interfaces responsivas para brindar una experiencia fluida tanto en dispositivos móviles como en entornos web.
                    </p>
                </a>
            </div>

            <div id="p5" class="bg-whiteopacity2 p-4 flex flex-col">
                <a href="/proyecto5" class="h-full flex flex-col">
                    <img src="/images/p5/img_w1.webp" class="imgsize" alt="Imagen del proyecto">
                    <h1 class="subtitle mt-3">Diseño de página web</h1>
                    <p class="text-sm sm:text-base text-justify px-2 mt-auto">
                        Diseño y planeación de una página web, utilizando herramientas de diseño como Figma y Canva para crear una interfaz atractiva y funcional.
                    </p>
                </a>
            </div>

        </div>

    </main>

    <footer class="bg-[#adadad] text-black text-center p-4 mt-8 w-full">
        <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const carrusel = document.querySelector(".order");
    const tarjeta = document.querySelector(".bg-whiteopacity2");

    if (!carrusel || !tarjeta) return;

    setInterval(() => {
        const paso = tarjeta.offsetWidth + 24;

        if (carrusel.scrollLeft + carrusel.clientWidth >= carrusel.scrollWidth - 10) {
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
    }, 3500);
});
</script>
</body>
</html>