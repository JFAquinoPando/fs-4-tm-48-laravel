<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <title>Shingeki no Kyojin | Archivo Militar</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;900&family=Cinzel+Decorative:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN con configuración del tema para compatibilidad inmediata) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        cinzel: ['Cinzel', 'serif'],
                        decorative: ['Cinzel Decorative', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        scout: {
                            950: '#08140f',
                            900: '#0f231b',
                            800: '#163629',
                            700: '#1f4a38',
                            accent: '#2e6e54',
                        },
                        parchment: {
                            100: '#fbf8f2',
                            200: '#ede4d1',
                            300: '#dac9ab',
                            500: '#aa9570',
                        },
                        titan: {
                            crimson: '#991b1b',
                            ember: '#ea580c',
                        },
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: #0c0a09;
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(22, 54, 41, 0.35) 0%, transparent 60%),
                radial-gradient(circle at 100% 100%, rgba(153, 27, 27, 0.15) 0%, transparent 50%),
                linear-gradient(to bottom, #0c0a09, #141210);
            background-attachment: fixed;
            color: #e7e5e4;
            min-height: 100vh;
        }

        .font-cinzel {
            font-family: 'Cinzel', serif;
        }

        .font-decorative {
            font-family: 'Cinzel Decorative', serif;
        }
    </style>
</head>
<body class="bg-stone-950 text-stone-200 min-h-screen antialiased selection:bg-amber-900 selection:text-amber-100 flex flex-col justify-between">

    <!-- Barra de estado superior militar -->
    <div class="bg-stone-950/90 border-b border-stone-800 text-stone-400 text-xs py-1.5 px-4 font-mono tracking-widest flex justify-between items-center">
        <span class="flex items-center gap-2">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-ping"></span>
            ESTADO: DISTRITO TROST — SECTOR SUR
        </span>
        <span class="hidden sm:inline text-amber-500/80 font-cinzel">
            MURALLA SINA • MURALLA ROSE • MURALLA MARÍA
        </span>
    </div>

    <!-- Header / Banner Principal -->
    <header class="relative border-b border-stone-800/80 bg-gradient-to-b from-stone-950 via-stone-900/60 to-stone-950 py-12 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <!-- Marca de agua de fondo -->
        <div class="absolute inset-0 opacity-5 pointer-events-none flex items-center justify-center font-decorative text-9xl text-stone-100 select-none">
            進撃の巨人
        </div>

        <div class="relative max-w-7xl mx-auto flex flex-col items-center text-center">
            <!-- Emblema Alas de la Libertad (Wings of Freedom) -->
            <div class="mb-4 relative group">
                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-stone-900/80 border-2 border-amber-600/80 p-3 shadow-xl shadow-emerald-950/50 flex items-center justify-center backdrop-blur-sm group-hover:border-amber-400 transition-colors">
                    <svg viewBox="0 0 100 100" class="w-full h-full filter drop-shadow">
                        <path d="M50 8 L85 24 L85 58 C85 78 50 94 50 94 C50 94 15 78 15 58 L15 24 Z" fill="#0f231b" stroke="#c5a059" stroke-width="3" />
                        <path d="M48 25 C40 32 32 45 35 60 C38 48 44 40 48 35 Z" fill="#ffffff" />
                        <path d="M52 30 C60 37 68 50 65 65 C62 53 56 45 52 40 Z" fill="#1e3a8a" />
                        <path d="M48 38 C42 43 36 53 38 65 C41 56 45 49 48 45 Z" fill="#ffffff" />
                        <path d="M52 43 C58 48 64 58 62 70 C59 61 55 54 52 50 Z" fill="#1e3a8a" />
                    </svg>
                </div>
                <span class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-stone-950 text-amber-500 text-[10px] font-cinzel font-bold px-2 py-0.5 rounded border border-amber-600/50 uppercase tracking-widest whitespace-nowrap">
                    Regimiento Scout
                </span>
            </div>

            <p class="text-amber-500/90 font-cinzel text-xs sm:text-sm font-semibold tracking-[0.3em] uppercase mb-1">
                Cuerpo de Exploración • Archivo Militar
            </p>

            <h1 class="font-cinzel text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-wider text-stone-100 drop-shadow-md">
                SHINGEKI NO KYOJIN
            </h1>

            <p class="mt-3 text-stone-400 font-sans max-w-2xl text-sm sm:text-base italic">
                "Ofreced vuestros corazones a la causa de la humanidad tras las murallas."
            </p>

            <!-- Estadísticas rápidas -->
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-6 w-full max-w-3xl">
                <div class="bg-stone-900/60 border border-stone-800 rounded-lg p-3 text-center backdrop-blur-sm">
                    <span class="text-stone-400 text-xs uppercase font-medium tracking-wider block">Registros</span>
                    <span class="text-2xl font-bold font-mono text-amber-200" id="stat-total">{{ $estadisticas['total'] }}</span>
                </div>
                <div class="bg-stone-900/60 border border-stone-800 rounded-lg p-3 text-center backdrop-blur-sm">
                    <span class="text-emerald-400/90 text-xs uppercase font-medium tracking-wider block">Con Vida</span>
                    <span class="text-2xl font-bold font-mono text-emerald-400" id="stat-vivos">{{ $estadisticas['vivos'] }}</span>
                </div>
                <div class="bg-stone-900/60 border border-stone-800 rounded-lg p-3 text-center backdrop-blur-sm">
                    <span class="text-rose-400/90 text-xs uppercase font-medium tracking-wider block">Caídos</span>
                    <span class="text-2xl font-bold font-mono text-rose-400" id="stat-caidos">{{ $estadisticas['caidos'] }}</span>
                </div>
                <div class="bg-stone-900/60 border border-stone-800 rounded-lg p-3 text-center backdrop-blur-sm">
                    <span class="text-amber-400/90 text-xs uppercase font-medium tracking-wider block">Titanes</span>
                    <span class="text-2xl font-bold font-mono text-amber-400" id="stat-titanes">{{ $estadisticas['titanes'] }}</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Barra de Filtros y Búsqueda -->
        <section class="mb-8 space-y-4">
            <div class="flex flex-col md:flex-row gap-4 justify-between items-center bg-stone-900/70 p-4 rounded-xl border border-stone-800 backdrop-blur-sm shadow-md">
                <!-- Buscador -->
                <div class="relative w-full md:w-96">
                    <input
                        type="text"
                        id="busqueda-input"
                        placeholder="Buscar por soldado, alias, distrito..."
                        class="w-full bg-stone-950/80 border border-stone-700/80 rounded-lg pl-10 pr-10 py-2.5 text-stone-200 placeholder-stone-500 text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors"
                        autocomplete="off"
                    />
                    <svg
                        class="w-4 h-4 text-stone-400 absolute left-3.5 top-3.5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <button
                        type="button"
                        id="btn-limpiar"
                        class="hidden absolute right-3 top-2.5 text-xs text-stone-400 hover:text-stone-200 p-1"
                    >
                        ✕
                    </button>
                </div>

                <!-- Botones de filtro por categoría militar -->
                <div class="flex flex-wrap items-center gap-2 w-full md:w-auto" id="filtros-container">
                    <button
                        type="button"
                        data-filter="todos"
                        class="filtro-btn px-3.5 py-1.5 rounded-lg text-xs font-cinzel font-bold tracking-wider transition-all bg-amber-600 text-stone-950 shadow-md"
                    >
                        Todos
                    </button>
                    <button
                        type="button"
                        data-filter="vivos"
                        class="filtro-btn px-3.5 py-1.5 rounded-lg text-xs font-cinzel font-semibold tracking-wider transition-all bg-stone-800/80 text-stone-300 hover:bg-stone-800 hover:text-amber-300 border border-stone-700/50"
                    >
                        Vivos
                    </button>
                    <button
                        type="button"
                        data-filter="caidos"
                        class="filtro-btn px-3.5 py-1.5 rounded-lg text-xs font-cinzel font-semibold tracking-wider transition-all bg-stone-800/80 text-stone-300 hover:bg-stone-800 hover:text-amber-300 border border-stone-700/50"
                    >
                        Caídos
                    </button>
                    <button
                        type="button"
                        data-filter="titanes"
                        class="filtro-btn px-3.5 py-1.5 rounded-lg text-xs font-cinzel font-semibold tracking-wider transition-all bg-stone-800/80 text-stone-300 hover:bg-stone-800 hover:text-amber-300 border border-stone-700/50"
                    >
                        Titanes
                    </button>
                </div>
            </div>
        </section>

        <!-- Estado: Sin resultados -->
        <div id="no-results" class="hidden py-20 text-center space-y-3">
            <p class="font-cinzel text-xl text-stone-400">
                No se han encontrado registros en los archivos militares
            </p>
            <p class="text-xs text-stone-500 font-mono">
                Verifica el nombre o ajusta los filtros del batallón.
            </p>
        </div>

        <!-- Cuadrícula de Tarjetas Blade -->
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="personajes-grid">
            @forelse($personajes as $personaje)
                <x-tarjeta :personaje="$personaje" />
            @empty
                <div class="col-span-full py-20 text-center">
                    <p class="font-cinzel text-xl text-stone-400">
                        No hay personajes registrados en la base de datos.
                    </p>
                    <p class="text-xs text-stone-500 font-mono mt-2">
                        Ejecuta <code class="text-amber-400 bg-stone-900 px-2 py-1 rounded">php artisan db:seed</code> para poblar los archivos.
                    </p>
                </div>
            @endforelse
        </section>
    </main>

    <!-- Pie de página militar -->
    <footer class="border-t border-stone-800/80 bg-stone-950 py-6 px-4 text-center text-xs text-stone-500 font-mono">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-3">
            <p>
                REGISTRO DE INTELIGENCIA DE PARADIS © {{ date('Y') }} — CUERPO DE EXPLORACIÓN
            </p>
            <p class="text-amber-600/80 font-cinzel">
                SHINZOU WO SASAGEYO (心臓を捧げよ)
            </p>
        </div>
    </footer>

    <!-- Script de filtrado interactivo en tiempo real -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputBusqueda = document.getElementById('busqueda-input');
            const btnLimpiar = document.getElementById('btn-limpiar');
            const botonesFiltro = document.querySelectorAll('.filtro-btn');
            const tarjetas = document.querySelectorAll('.personaje-card');
            const noResults = document.getElementById('no-results');

            let filtroActivo = 'todos';
            let textoBusqueda = '';

            function aplicarFiltros() {
                let visibles = 0;

                tarjetas.forEach(tarjeta => {
                    const nombre = tarjeta.getAttribute('data-nombre') || '';
                    const alias = tarjeta.getAttribute('data-alias') || '';
                    const residencia = tarjeta.getAttribute('data-residencia') || '';
                    const vivo = tarjeta.getAttribute('data-vivo') === '1';
                    const titan = tarjeta.getAttribute('data-titan') === '1';

                    // Coincidencia con búsqueda
                    const coincideTexto = !textoBusqueda || 
                        nombre.includes(textoBusqueda) || 
                        alias.includes(textoBusqueda) || 
                        residencia.includes(textoBusqueda);

                    // Coincidencia con categoría
                    let coincideCategoria = true;
                    if (filtroActivo === 'vivos') coincideCategoria = vivo;
                    if (filtroActivo === 'caidos') coincideCategoria = !vivo;
                    if (filtroActivo === 'titanes') coincideCategoria = titan;

                    if (coincideTexto && coincideCategoria) {
                        tarjeta.style.display = '';
                        visibles++;
                    } else {
                        tarjeta.style.display = 'none';
                    }
                });

                if (noResults) {
                    noResults.classList.toggle('hidden', visibles > 0);
                }
            }

            inputBusqueda.addEventListener('input', (e) => {
                textoBusqueda = e.target.value.trim().toLowerCase();
                btnLimpiar.classList.toggle('hidden', textoBusqueda === '');
                aplicarFiltros();
            });

            btnLimpiar.addEventListener('click', () => {
                inputBusqueda.value = '';
                textoBusqueda = '';
                btnLimpiar.classList.add('hidden');
                inputBusqueda.focus();
                aplicarFiltros();
            });

            botonesFiltro.forEach(btn => {
                btn.addEventListener('click', () => {
                    filtroActivo = btn.getAttribute('data-filter');

                    botonesFiltro.forEach(b => {
                        b.className = 'filtro-btn px-3.5 py-1.5 rounded-lg text-xs font-cinzel font-semibold tracking-wider transition-all bg-stone-800/80 text-stone-300 hover:bg-stone-800 hover:text-amber-300 border border-stone-700/50';
                    });

                    btn.className = 'filtro-btn px-3.5 py-1.5 rounded-lg text-xs font-cinzel font-bold tracking-wider transition-all bg-amber-600 text-stone-950 shadow-md';

                    aplicarFiltros();
                });
            });
        });
    </script>
</body>
</html>
