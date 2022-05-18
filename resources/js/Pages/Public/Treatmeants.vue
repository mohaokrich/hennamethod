<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Services from '@/Pages/Public/main-content/Services.vue'
</script>

<template>
    <AppLayout title="Tratamientos">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tratamientos
            </h2>
        </template>

        <div class="absolute bottom-0 left-0 z-40">
            <img src="/img/tropical-leaves-dry-bottom.png" alt="">
        </div>
        <div class="absolute top-0 left-0 z-40">
            <img src="/img/tropical-leaves-dry-top.png" alt="">
        </div>
        <div class="absolute top-0 right-0 z-40">
            <img src="/img/lamps-hanging-right.png" alt="">
        </div>
        <div class="absolute z-40"
            style="background-image: url('/img/tropical-leaves-dry-top.png') left top no-repeat; background-size: 25%;">
        </div>
        <div class="absolute z-40"
            style="background-image: url('/img/lamps-hanging-right.png') right top no-repeat; background-size: 25%;">
        </div>

        <div class="py-12 z-30">
            <div class="max-w-full mx-auto px-8 md:px-2">
                <div class="">
                    <Services />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
