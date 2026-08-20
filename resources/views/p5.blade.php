<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de pagina web</title>
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
                <h1 class="title">Diseño de pagina web</h1>
            </div>
            <div class="principal">
                <p class="standar">
                    Como parte de un proyecto escolar debía crear un sito web basado en un objetivo social
                    ademas de ser interesante al usuario, quería ir más allá de las plantillas web tradicionales. 
                    Mi visión era diseñar un espacio digital que no solo presentara información, sino que cobrara vida 
                    propia. Así es como nació este proyecto.El Desafío: Combinar el diseño tradicional con la 
                    interactividad 3D y una experiencia de usuario fluida, todo mientras mantenía una estética limpia 
                    y amigable.
                </p><br>
                <p class="standar">
                    La elección de Tailwind CSS me permitió construir un diseño limpio, 
                    con una paleta de colores suaves y una jerarquía de información clara. 
                    Esto facilita la lectura del contenido, como las historias de los perritos en el catálogo, 
                    mejorando la experiencia de usuario general.
                    Al incluir un quiz funcional sobre actividades cotidianas, logré fomentar la participación 
                    activa del usuario en el sitio, aumentando el tiempo de permanencia y creando una interacción 
                    más dinámica y entretenida.
                </p><br>
                <p class="standar">
                    Para enganchar al usuario en el perfil del perrito integré un banner con un perrito 3D 
                    animado y elementos flotantes interactivos creados con Spline. Demostré que es posible integrar 
                    tecnologías de vanguardia como el 3D en la web sin comprometer la usabilidad ni la conexión 
                    emocional con el usuario, logrando un sitio funcional y altamente atractivo.
                </p><br>
            </div>
        </div>
        <div id="tools" class="bg-whiteopacity">
            <h1 class="subtitle">
                Herramientas y tecnologías utilizadas
            </h1>
            <ul class="list-disc pl-8 standar">
                <li>Adobe Illustrator</li>
                <li>Figma</li>
                <li>Framework CSS: Tailwind CSS</li>
                <li>Diseño 3D e Interacción: Spline.</li>
                <li>JavaScript</li>
                <li>Vue js</li>
            </ul>
        </div>

    </main>
    <div id="mockups" class="bento-grid">
        <div>
            <img src="/images/p5/img_w1.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
        <div>
            <img src="/images/p5/img_w2.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
        <div>
            <img src="/images/p5/img_w4.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
        <div>
            <img src="/images/p5/img_w6.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
    </div>

    <div class="bg-whiteopacity">
    <iframe 
        class="aspect-video w-full rounded-lg" 
        src="https://www.youtube.com/embed/TWzOIuTfZ2Q" 
        title="Demo del Proyecto" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    </div>

    <footer class="bg-[#adadad] text-black text-center p-4">
    <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>