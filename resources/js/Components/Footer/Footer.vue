<template>
    <footer
        class="relative bg-neutral-900 dark:bg-neutral-950 shadow-[0_-4px_24px_0_rgba(60,60,60,0.25)] text-neutral-content before:pointer-events-none before:absolute before:inset-x-0 before:top-0 before:h-2 before:bg-gradient-to-t before:from-neutral-900 before:to-transparent dark:before:from-neutral-950 before:opacity-80">
        <div class="flex flex-col justify-center mx-auto max-w-screen px-2 sm:px-6 lg:px-8 py-6 items-center p-4">
            <aside class="text-center sm:text-left p-4">
                <p class="text-sm font-medium text-gray-300">
                    Copyright © {{ new Date().getFullYear() }} - Desarrollada por Maria Noreña
                </p>
            </aside>
            <nav class="flex flex-wrap justify-center gap-6">
                <a href="#" 
                    class="group relative text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    Aviso legal
                </a>
                <a href="#" 
                    class="group relative text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    Politica de privacidad
                </a>
                <a href="#" 
                    class="group relative text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    Politica de cookies
                </a>
                <a href="#" 
                    class="group relative text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    Configuración de cookies
                </a>
            </nav>
        </div>
    </footer>
</template>