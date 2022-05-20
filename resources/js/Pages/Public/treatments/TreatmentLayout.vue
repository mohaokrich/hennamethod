<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Services from '@/Pages/Public/treatments/Services.vue'

</script>

<template>
    <AppLayout title="Tratamientos">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tratamientos
            </h2>
        </template>
        <div class="py-12 z-30">
            <div class="max-w-full mx-auto px-8 md:px-2">
                <div class="">
                    <slot />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
