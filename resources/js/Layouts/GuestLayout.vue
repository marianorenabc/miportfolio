<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Header from '@/Components/Header/Header.vue';
import Footer from '@/Components/Footer/Footer.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div
        class="flex flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0"
    >
        <!-- Header Component -->
        <Header />


        <div
            class="flex-grow"
        >
            <slot />
        </div>

        <!-- Footer Component -->
        <Footer />

    </div>
</template>
