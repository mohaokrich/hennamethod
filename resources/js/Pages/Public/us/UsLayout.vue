<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<template>
    <AppLayout title="Nosotros">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Nosotros
            </h2>
        </template>
         <!-- style="background:url('/img/tropical-leaves-dry-bottom.png') left bottom no-repeat, url('/img/tropical-leaves-dry-top.png') left top no-repeat, url('/img/lamps-hanging-right.png') right top no-repeat; background-size: 25%;" -->
        <div class="py-12 z-40 relative">
            <div class="max-w-full" >
                <div class="">
                    <slot />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
