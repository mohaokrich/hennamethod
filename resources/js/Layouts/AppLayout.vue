<script setup>

import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import JetBanner from '@/Jetstream/Banner.vue';
import JetDropdown from '@/Jetstream/Dropdown.vue';
import JetDropdownLink from '@/Jetstream/DropdownLink.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);
const logout = () => {
    Inertia.post(route('logout'));
};
</script>

<template>
    <div>

        <Head :title="title" />

        <JetBanner />
        <!-- Page Heading -->
        <!-- <header v-if="$slots.header" class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header> -->
        <header class="bg-white shadow">
            <div class="content-center max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
                <img class="mx-auto" src="/img/logo-hm-inkfree-leaf.svg" alt="logo-brand">
            </div>
        </header>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100 py-10">
                <!-- Primary Navigation Menu -->
                <div class="flex justify-center max-w-7xl mx-auto">

                    <div class="hidden sm:flex sm:items-center justify-items-center">
                        <div class="flex flex-wrap items-center ">
                            <!-- Settings Dropdown -->
                            <div class="relative mx-auto mt-2">
                                <JetDropdown align="right" width="48" v-if="$page.props.user">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos"
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                        </button>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <JetDropdownLink :href="route('profile.show')">
                                            Profile
                                        </JetDropdownLink>

                                        <!-- <JetDropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                            API Tokens
                                        </JetDropdownLink> -->

                                        <div class="border-t border-gray-100" />

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <JetDropdownLink as="button">
                                                Log Out
                                            </JetDropdownLink>
                                        </form>
                                    </template>
                                </JetDropdown>
                                <JetDropdown align="left" width="48" v-else>
                                    <template #trigger>
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Usuario
                                        </div>
                                        <JetDropdownLink :href="route('login')">
                                            Iniciar Sesión
                                        </JetDropdownLink>
                                        <div class="border-t border-gray-100" />
                                        <JetDropdownLink :href="route('register')">
                                            Registrarse
                                        </JetDropdownLink>
                                    </template>
                                </JetDropdown>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden sm:-my-px sm:flex md:px-10 mt-2 mx-auto text-sm">
                                <div class="flex flex-wrap sm:space-x-16">
                                    <span class="mx-auto space-x-16 text-sm">
                                        <JetNavLink :href="route('home')" :active="route().current('home')">
                                            Inicio
                                        </JetNavLink>
                                        <JetNavLink :href="route('test')" :active="route().current('test')">
                                            Tratamientos
                                        </JetNavLink>
                                        <JetNavLink :href="route('test')" :active="route().current('test')">
                                            Blog
                                        </JetNavLink>
                                    </span>
                                    <span class="mx-auto space-x-16 text-sm">
                                        <JetNavLink :href="route('test')" :active="route().current('test')">
                                            Nosotros
                                        </JetNavLink>
                                        <JetNavLink :href="route('test')" :active="route().current('test')">
                                            Contacto
                                        </JetNavLink>
                                        <JetNavLink :href="route('test')" :active="route().current('test')">
                                            FAQS
                                        </JetNavLink>
                                    </span>
                                </div>
                            </div>
                            <!-- Seach Bar -->
                            <div class="relative text-gray-600 mx-auto mt-2">
                                <input
                                    class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                                    type="search" name="search" placeholder="Buscar">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4 pb-2">
                                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                        y="0px" viewBox="0 0 56.966 56.966"
                                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        width="512px" height="512px">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>



                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition"
                            @click="showingNavigationDropdown = !showingNavigationDropdown">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path
                                    :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path
                                    :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }"
                    class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <JetResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </JetResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options Private -->
                    <div class="pt-4 pb-1 border-t border-gray-200" v-if="$page.props.user">
                        <div class="flex items-center px-4">
                            <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover"
                                    :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                            </div>

                            <div>
                                <div class="font-medium text-base text-gray-800">
                                    {{ $page.props.user.name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">
                                    {{ $page.props.user.email }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <JetResponsiveNavLink :href="route('profile.show')"
                                :active="route().current('profile.show')">
                                Perfil
                            </JetResponsiveNavLink>

                            <!-- <JetResponsiveNavLink v-if="$page.props.jetstream.hasApiFeatures"
                                :href="route('api-tokens.index')" :active="route().current('api-tokens.index')">
                                API Tokens
                            </JetResponsiveNavLink> -->

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <JetResponsiveNavLink as="button">
                                    Cerrar Sesión
                                </JetResponsiveNavLink>
                            </form>
                        </div>
                    </div>


                    <!-- Responsive Settings Public -->
                    <div class="pt-4 pb-1 border-t border-gray-200" v-else>
                        <div class="flex items-center px-4">
                            <div class="shrink-0 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>

                            <div>
                                <div class="font-medium text-base text-gray-800">
                                    User
                                </div>
                                <div class="font-medium text-sm text-gray-500">
                                    user@example.com
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <JetResponsiveNavLink :href="route('login')">
                                Iniciar Sesión
                            </JetResponsiveNavLink>
                            <JetResponsiveNavLink :href="route('register')">
                                Registrarse
                            </JetResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>



            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
