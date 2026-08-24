<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('icon.ico') }}">
    <title>Proyecto 1</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-new">
    <header class="w-full bg-[#ece7e7] sticky top-0 z-50 px-6 py-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <!-- 2. NAVEGACIÓN (Centro - Se oculta en celulares) -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-700">
                <a href="/" class="hover:text-indigo-400 transition">Sobre mí</a>
                <a href="https://www.linkedin.com/in/cinthia-canul-canche-2b1a84377" class="hover:text-indigo-400 transition">Linkedin</a>
            </nav>

            <!-- 3. ACCIONES Y SOCIAL (Derecha) -->
            <div class="flex items-center gap-4">
            <!-- Icono GitHub -->
                <a href="https://github.com/tu-usuario" target="_blank" class="text-slate-400 hover:text-white transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><!-- SVG GitHub --></svg>
                </a>

            </div>

        </div>
    </header>
    <main>
        <div id="about">
            <div class="white">
                <h1 class="title">Sistema Web Web Full-Stack para Gestión y Pedidos de Pizzería</h1>
            </div>
            <div class="principal">
                <p class="standar">
                    Desarrollo de un sistema web para una pizzería, permitiendo a los clientes realizar pedidos en línea y 
                    a los administradores gestionar el inventario, los pedidos y la información de los clientes.
                </p><br>
                <p class="standar">
                    Desarrollé el Backend utilizando PHP estructurado y la extensión MySQLi para establecer conexiones 
                    seguras a la base de datos relacional. Implementé un sistema de autenticación de usuarios mediante 
                    formularios de Login y Registro, asegurando las contraseñas con el algoritmo password_hash. 
                    Maqueté interfaces responsivas e interactivas con Tailwind CSS y JavaScript (AJAX / XMLHttpRequest) 
                    para permitir actualizaciones dinámicas en los páneles de administración sin recargar la página completa.
                    Adicionalmente, integré la API de Google Maps para trazar rutas de entrega a domicilio.
                </p>
            </div>
        </div>
        <div id="tools" class="bg-whiteopacity">
            <h1 class="subtitle">
                Herramientas y tecnologías utilizadas
            </h1>
            <ul class="list-disc pl-8 standar">
                <li>PHP</li>
                <li>MySQL</li>
                <li>Tailwind CSS</li>
                <li>JavaScript (AJAX / XMLHttpRequest)</li>
                <li>Google Maps API</li>
            </ul>
        </div>
    </main>
    <div id="mockups" class="bento-grid">
            <div class="item item-1">
                <img src="/images/p1/img_p1.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
            <div class="item item-2">
                <img src="/images/p1/img_p2.webp" class="img-size tarjeta-proyecto " alt="Imagen del proyecto" >
            </div>
            <div class="item item-3">
                <img src="/images/p1/img_p3.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
            <div class="item item-4">
                <img src="/images/p1/img_p4.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
    </div>

    <div class="bg-whiteopacity">
    <iframe 
        class="aspect-video w-full rounded-lg" 
        src="https://www.youtube.com/embed/LeR38DQqyYc" 
        title="Demo del Proyecto" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    </div>

    <p> </p>
    <footer class="bg-[#adadad] text-black text-center p-4">
    <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>