<script setup>
import { ref } from 'vue'

const mobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value
}
</script>

<template>
<nav
    class="relative bg-neutral-900 dark:bg-neutral-950 shadow-[0_4px_24px_0_rgba(60,60,60,0.25)] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-2 after:bg-gradient-to-b after:from-neutral-900 after:to-transparent dark:after:from-neutral-950 after:opacity-80">
    <div class="mx-auto max-w-screen px-2 sm:px-6 lg:px-8 py-6">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button 
                    type="button" 
                    @click="toggleMobileMenu"
                    :aria-expanded="mobileMenuOpen"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400  hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu icon (hamburger) -->
                    <svg v-show="!mobileMenuOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <!-- Close icon (X) -->
                    <svg v-show="mobileMenuOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-between">
                <!-- Logo section -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <span class="ml-2 text-white font-bold text-lg hidden sm:inline">MiPortafolio</span>
                    </a>
                </div>
                <!-- Navbar links -->
                <div class="hidden sm:block">
                    <div class="flex space-x-6 px-4 py-2">
                        <a href="#"
                            class="group relative rounded-md px-5 py-3 text-sm font-medium text-gray-300 hover:text-white transition-colors">
                            Inicio
                            <span class="absolute bottom-2 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4/5"></span>
                        </a>
                        <a href="#"
                            class="group relative rounded-md px-5 py-3 text-sm font-medium text-gray-300 hover:text-white transition-colors">
                            Proyectos
                            <span class="absolute bottom-2 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4/5"></span>
                        </a>
                        <a href="#"
                            class="group relative rounded-md px-5 py-3 text-sm font-medium text-gray-300 hover:text-white transition-colors">
                            Frameworks
                            <span class="absolute bottom-2 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4/5"></span>
                        </a>
                        <a href="#"
                            class="group relative rounded-md px-5 py-3 text-sm font-medium text-gray-300 hover:text-white transition-colors">
                            Sobre mi
                            <span class="absolute bottom-2 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4/5"></span>
                        </a>
                        <a href="#"
                            class="group relative rounded-md px-5 py-3 text-sm font-medium text-gray-300 hover:text-white transition-colors">
                            Contacto
                            <span class="absolute bottom-2 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4/5"></span>
                        </a>
                        <button type="button" aria-current="page"
                            class="btn btn-dash rounded-md px-5 py-3 text-sm font-medium bg-white text-neutral-900 hover:bg-neutral-200 transition-colors">Descargar
                            CV</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div v-show="mobileMenuOpen" class="sm:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Inicio</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Proyectos</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Frameworks</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Sobre
                mi</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Contacto</a>
            <button type="button" aria-current="page"
                class="btn btn-dash w-full block rounded-md px-3 py-2 text-base font-medium bg-white text-neutral-900 hover:bg-neutral-200 transition-colors">Descargar
                CV</button>
        </div>
    </div>
</nav>
</template>