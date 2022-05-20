<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Pages/Public/home/Welcome.vue'
</script>

<template>
    <AppLayout title="Welcome">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home
            </h2>
        </template>
         <!-- style="background:url('/img/tropical-leaves-dry-bottom.png') left bottom no-repeat, url('/img/tropical-leaves-dry-top.png') left top no-repeat, url('/img/lamps-hanging-right.png') right top no-repeat; background-size: 25%;" -->
        <div class="py-12 z-40 relative">
            <div class="max-w-screen-xl mx-auto px-8 md:px-2" >
                <div class="">
                    <slot />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
