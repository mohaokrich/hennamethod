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
                <img class="mx-auto" src="/img/logo-hm-inkfree-madrid.svg" alt="logo-brand">
            </div>
        </header>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100 pb-10">
                <!-- Primary Navigation Menu -->
                <div class="flex justify-center max-w-7xl mx-auto">

                    <div class="hidden mobile:flex sm:items-center justify-items-center">
                        <div class="flex flex-wrap items-center ">
                            <!-- Settings Dropdown -->
                            <div class="relative mx-auto mt-2">
                                <JetDropdown align="left" class="z-50 relative" width="48" v-if="$page.props.user">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos"
                                            class="flex text-sm border-2 border-gray-500 rounded-full focus:outline-none focus:border-gray-300 transition">
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
                                            Perfil
                                        </JetDropdownLink>

                                        <!-- <JetDropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                            API Tokens
                                        </JetDropdownLink> -->

                                        <div class="border-t border-gray-100" />

                                        <JetDropdownLink v-if="$page.props.user.is_admin == 1"
                                            :href="route('blog-admin')">
                                            Administración
                                        </JetDropdownLink>

                                        <div class="border-t border-gray-100" />

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <JetDropdownLink as="button">
                                                Salir
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
                            <div class="hidden mobile:flex mt-2 flex-wrap justify-center items-center mx-16">
                                <JetNavLink class="mobile:mx-8" :href="route('home')" :active="route().current('home')">
                                    Inicio
                                </JetNavLink>
                                <JetNavLink class="mobile:mx-8" :href="route('treatments')"
                                    :active="route().current('treatments')">
                                    Tratamientos
                                </JetNavLink>
                                <JetNavLink class="mobile:mx-8" :href="route('blog')" :active="route().current('blog')">
                                    Blog
                                </JetNavLink>
                                <JetNavLink class="mobile:mx-8" :href="route('nosotros')"
                                    :active="route().current('nosotros')">
                                    Nosotros
                                </JetNavLink>
                                <JetNavLink class="mobile:mx-8" :href="route('contacto')"
                                    :active="route().current('contacto')">
                                    Contacto
                                </JetNavLink>
                                <JetNavLink class="mobile:mx-8" :href="route('faqs')" :active="route().current('faqs')">
                                    FAQS
                                </JetNavLink>
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
                    <div class="-mr-2 flex items-center mobile:hidden">
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
                        <JetResponsiveNavLink :href="route('home')" :active="route().current('home')">
                            Inicio
                        </JetResponsiveNavLink>

                        <JetResponsiveNavLink :href="route('treatments')" :active="route().current('treatments')">
                            Tratamientos
                        </JetResponsiveNavLink>

                        <JetResponsiveNavLink :href="route('blog')" :active="route().current('blog')">
                            Blog
                        </JetResponsiveNavLink>

                        <JetResponsiveNavLink :href="route('nosotros')" :active="route().current('nosotros')">
                            Nosotros
                        </JetResponsiveNavLink>

                        <JetResponsiveNavLink :href="route('contacto')" :active="route().current('contacto')">
                            Contacto
                        </JetResponsiveNavLink>

                        <JetResponsiveNavLink :href="route('faqs')" :active="route().current('faqs')">
                            FAQS
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

                            <JetResponsiveNavLink v-if="$page.props.user.is_admin == 1" :href="route('blog-admin')">
                                Administración
                            </JetResponsiveNavLink>

                            <form method="POST" @submit.prevent="logout">
                                <JetResponsiveNavLink as="button">
                                    Salir
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
            <main class="relative mb-auto">
                <div class="absolute bottom-0 left-0 z-20 w-1/5">
                    <img src="/img/tropical-leaves-dry-bottom.png" alt="">
                </div>
                <div class="absolute top-0 left-0 z-20 w-1/5">
                    <img src="/img/tropical-leaves-dry-top.png" alt="">
                </div>
                <div class="absolute top-0 right-0 z-20 w-1/5">
                    <img src="/img/lamps-hanging-right.png" alt="">
                </div>
                <div class="absolute top-0 right-0 z-10">
                    <img src="/img/climbing-plant-lined.png" alt="">
                </div>
                <slot />
            </main>
            <!-- Footer fixed max-w-full inset-x-0 bottom-0 z-50 -->
            <footer class="bg-black sticky top-[100vh]">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                    <div class="flex justify-center space-x-6 md:order-1">
                        <a href="#" class="text-gray-400 hover:text-gray-500" target="_blank">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="https://www.instagram.com/hennamethod/?hl=es" class="text-gray-400 hover:text-gray-500"
                            target="_blank">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="https://twitter.com/hennamethod" class="text-gray-400 hover:text-gray-500"
                            target="_blank">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                    <div class="mt-8 md:mt-0 md:order-2">
                        <p class="text-center text-base text-gray-400">&copy; 2022 Henna Method. All rights reserved |
                            <Link class="font-extrabold text-gray-300" :href="route('aviso-legal')">Aviso legal</Link>
                        </p>
                    </div>
                    <div class="mt-8 md:mt-0 md:order-3">
                        <p class="text-center text-base text-gray-400">Desarrollado por <a
                                class="font-extrabold text-gray-300" target="_blank"
                                href="https://github.com/mohaokrich">@Mohaokrich</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>
