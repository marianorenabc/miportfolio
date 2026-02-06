<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Header from '@/Components/Header/Header.vue';
import Footer from '@/Components/Footer/Footer.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col bg-neutral-900">
       
        <!-- Header Component -->
        <Header />


        <!-- Main Content -->
        <div class="flex-grow">
            <slot />
        </div>


        <!-- Footer Component -->
        <Footer />

    </div>
</template>
