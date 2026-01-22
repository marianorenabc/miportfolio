<script setup>

import { ref } from 'vue';
// Variable para controlar si el menú móvil está abierto o cerrado
const mostrarMenu = ref(false);

// Función para abrir/cerrar
const toggleMenu = () => {
    mostrarMenu.value = !mostrarMenu.value;
};

</script>

<template>
    <nav
        class="relative bg-neutral-900 dark:bg-neutral-950 shadow-[0_4px_24px_0_rgba(60,60,60,0.25)] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-2 after:bg-gradient-to-b after:from-neutral-900 after:to-transparent dark:after:from-neutral-950 after:opacity-80">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">

                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button @click="toggleMenu" type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" :aria-expanded="mostrarMenu">
                        <span class="sr-only">Abrir menú</span>

                        <svg v-show="!mostrarMenu" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg v-show="mostrarMenu" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">

                    <div class="flex flex-shrink-0 items-center">
                        <Link href="/" class="flex items-center">
                            <span class="ml-2 text-white font-bold text-lg hidden sm:inline">MiPortafolio</span>
                        </Link>
                    </div>

                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <Link href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                aria-current="page">Inicio</Link>
                            <Link href="/proyectos"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Proyectos</Link>
                            <Link href="/frameworks"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Frameworks</Link>
                            <Link href="/sobre-mi"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Sobre mí</Link>
                            <Link href="/contacto"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Contacto</Link>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <button type="button"
                        class="hidden sm:block btn btn-dash rounded-md px-5 py-2 text-sm font-medium bg-white text-neutral-900 hover:bg-neutral-200 transition-colors mr-4">
                        Descargar CV
                    </button>

                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">Ver notificaciones</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div v-show="mostrarMenu" class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <Link href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                    aria-current="page">Inicio</Link>
                <Link href="/proyectos"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Proyectos</Link>
                <Link href="/frameworks"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Frameworks</Link>
                <Link href="/sobre-mi"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Sobre mí</Link>
                <Link href="/contacto"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Contacto</Link>

                <button
                    class="w-full mt-4 btn btn-dash rounded-md px-5 py-3 text-sm font-medium bg-white text-neutral-900 hover:bg-neutral-200 transition-colors">
                    Descargar CV
                </button>
            </div>
        </div>
    </nav>
</template>