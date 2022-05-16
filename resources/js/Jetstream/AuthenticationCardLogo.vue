<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Link :href="'/'">
        <img  src="/img/logo-acceso.svg" alt="logo-acceso" v-if="$page.component === 'Auth/Login'">
        <img  src="/img/logo-registro.svg" alt="logo-registro" v-else>
    </Link>
</template>
