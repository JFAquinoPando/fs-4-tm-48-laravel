@props(['personaje'])

@php
    $isAlive = (bool) $personaje->vivo;
    $estadoTexto = $isAlive ? 'Activo' : 'Caído';
    $esTitan = $personaje->es_titan;
    $tieneImagen = !empty($personaje->imagen) && trim($personaje->imagen) !== '' && $personaje->imagen !== 'render.jpg';
    $especies = is_array($personaje->especies) ? $personaje->especies : (json_decode($personaje->especies ?? '[]', true) ?: []);
@endphp

<article 
    class="personaje-card group relative flex flex-col justify-between overflow-hidden rounded-xl bg-stone-900/90 border border-stone-800 hover:border-amber-600/60 shadow-xl shadow-black/40 hover:shadow-2xl hover:shadow-emerald-950/40 transition-all duration-300 transform hover:-translate-y-1"
    data-nombre="{{ strtolower($personaje->nombre) }}"
    data-alias="{{ strtolower($personaje->alias ?? '') }}"
    data-residencia="{{ strtolower($personaje->residencia ?? '') }}"
    data-vivo="{{ $isAlive ? '1' : '0' }}"
    data-titan="{{ $esTitan ? '1' : '0' }}"
>
    <!-- Marco decorativo militar superior -->
    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-emerald-800 via-amber-600 to-emerald-900 z-10 opacity-70 group-hover:opacity-100 transition-opacity"></div>

    <!-- Cabecera / Imagen del soldado -->
    <div class="relative">
        <!-- Badges superiores flotantes -->
        <div class="absolute top-3 inset-x-3 z-10 flex items-center justify-between pointer-events-none">
            <!-- Badge de estado militar -->
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold tracking-wider uppercase shadow-md backdrop-blur-md {{ $isAlive ? 'bg-emerald-950/85 text-emerald-300 border border-emerald-600/50' : 'bg-rose-950/85 text-rose-300 border border-rose-600/50' }}">
                <span class="h-2 w-2 rounded-full {{ $isAlive ? 'bg-emerald-400 animate-pulse' : 'bg-rose-500' }}"></span>
                {{ $estadoTexto }}
            </span>

            <!-- Badge de especie / Titán -->
            @if($esTitan)
                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold font-cinzel tracking-wider uppercase bg-amber-950/85 text-amber-300 border border-amber-500/50 shadow-md backdrop-blur-md">
                    <svg class="w-3.5 h-3.5 fill-amber-400" viewBox="0 0 20 20">
                        <path d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" />
                    </svg>
                    Titán
                </span>
            @endif
        </div>

        <!-- Retrato / Picture -->
        <picture class="block relative w-full h-72 sm:h-80 bg-gradient-to-b from-stone-950 via-stone-900 to-stone-950 overflow-hidden">
            @if($tieneImagen)
                <img
                    src="{{ $personaje->imagen }}"
                    alt="{{ $personaje->nombre }}"
                    loading="lazy"
                    class="w-full h-full object-cover object-top filter contrast-105 brightness-95 group-hover:scale-105 group-hover:brightness-105 transition-transform duration-500"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                />
                <div class="w-full h-full hidden flex-col items-center justify-center p-6 text-stone-600 bg-stone-950/80">
                    <svg class="w-20 h-20 mb-2 opacity-30 text-amber-500/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 10a3 3 0 116 0 3 3 0 01-6 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18.5a6 6 0 0112 0" />
                    </svg>
                    <span class="text-xs uppercase tracking-widest text-stone-500 font-cinzel">
                        Sin Retrato Oficial
                    </span>
                </div>
            @else
                <div class="w-full h-full flex flex-col items-center justify-center p-6 text-stone-600 bg-stone-950/80">
                    <svg class="w-20 h-20 mb-2 opacity-30 text-amber-500/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 10a3 3 0 116 0 3 3 0 01-6 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18.5a6 6 0 0112 0" />
                    </svg>
                    <span class="text-xs uppercase tracking-widest text-stone-500 font-cinzel">
                        Sin Retrato Oficial
                    </span>
                </div>
            @endif

            <!-- Sombra degradada para fundir con la tarjeta -->
            <div class="absolute inset-0 bg-gradient-to-t from-stone-900 via-stone-900/40 to-transparent pointer-events-none"></div>
        </picture>
    </div>

    <!-- Contenido / Expediente del soldado -->
    <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
        <div>
            <!-- Nombre y Alias -->
            <header class="border-b border-stone-800 pb-3">
                <h3 class="font-cinzel text-xl font-bold tracking-wider text-amber-100 group-hover:text-amber-300 transition-colors leading-tight">
                    {{ $personaje->nombre }}
                </h3>
                @if(!empty($personaje->alias))
                    <p class="text-sm font-medium text-amber-500/80 italic mt-0.5 tracking-wide">
                        "{{ $personaje->alias }}"
                    </p>
                @else
                    <p class="text-xs text-stone-500 uppercase tracking-widest mt-0.5 font-cinzel">
                        Soldado de las Murallas
                    </p>
                @endif
            </header>

            <!-- Lista de atributos técnicos / expediente -->
            <ul class="mt-4 space-y-2 text-xs">
                <li class="flex justify-between items-center py-1 border-b border-stone-800/60">
                    <span class="text-stone-400 uppercase tracking-wider font-medium">Estado:</span>
                    <span class="font-semibold {{ $isAlive ? 'text-emerald-400' : 'text-rose-400' }}">
                        {{ $estadoTexto }}
                    </span>
                </li>
                <li class="flex justify-between items-center py-1 border-b border-stone-800/60">
                    <span class="text-stone-400 uppercase tracking-wider font-medium">Edad:</span>
                    <span class="text-stone-200 font-mono">
                        {{ $personaje->edad && (int)$personaje->edad > 0 ? $personaje->edad . ' años' : 'Desconocida' }}
                    </span>
                </li>
                <li class="flex justify-between items-center py-1 border-b border-stone-800/60">
                    <span class="text-stone-400 uppercase tracking-wider font-medium">Estatura:</span>
                    <span class="text-stone-200 font-mono">
                        @if($personaje->estatura && (float)$personaje->estatura > 0)
                            @if((float)$personaje->estatura >= 15)
                                {{ $personaje->estatura }} m (Forma Titán)
                            @else
                                {{ $personaje->estatura }} m
                            @endif
                        @else
                            Desconocida
                        @endif
                    </span>
                </li>

                @if(!empty($personaje->lugarNacimiento) && $personaje->lugarNacimiento !== 'unknown')
                    <li class="flex justify-between items-center py-1 border-b border-stone-800/60">
                        <span class="text-stone-400 uppercase tracking-wider font-medium">Origen:</span>
                        <span class="text-amber-200/80 font-medium truncate max-w-[140px] text-right" title="{{ $personaje->lugarNacimiento }}">
                            {{ $personaje->lugarNacimiento }}
                        </span>
                    </li>
                @endif

                @if(!empty($personaje->residencia) && $personaje->residencia !== 'unknown')
                    <li class="flex justify-between items-center py-1 border-b border-stone-800/60">
                        <span class="text-stone-400 uppercase tracking-wider font-medium">Residencia:</span>
                        <span class="text-amber-200/80 font-medium truncate max-w-[140px] text-right" title="{{ $personaje->residencia }}">
                            {{ $personaje->residencia }}
                        </span>
                    </li>
                @endif
            </ul>
        </div>

        <!-- Especies / Etiquetas de la Legión -->
        @if(!empty($especies) && count($especies) > 0)
            <div class="pt-2 flex flex-wrap gap-1.5">
                @foreach($especies as $esp)
                    <span class="px-2 py-0.5 rounded text-[10px] font-mono tracking-wider uppercase bg-stone-800 text-stone-300 border border-stone-700/60">
                        {{ $esp }}
                    </span>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Sello inferior del expediente -->
    <footer class="px-5 py-2.5 bg-stone-950/70 border-t border-stone-800/80 flex items-center justify-between text-[10px] text-stone-500 font-mono tracking-widest uppercase">
        <span>EXPEDIENTE MILITAR</span>
        <span class="text-amber-600/70 font-cinzel">PARADIS</span>
    </footer>
</article>
