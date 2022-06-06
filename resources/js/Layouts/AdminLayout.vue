<!-- This example requires Tailwind CSS v2.0+ -->
<script setup>
import { ref } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue'
import {
    CalendarIcon,
    ChartBarIcon,
    FolderIcon,
    HomeIcon,
    InboxIcon,
    MenuIcon,
    UsersIcon,
    XIcon,
} from '@heroicons/vue/outline'

const navigation = [
    { name: 'Gestión blog', href: "route('blog.admin')", icon: HomeIcon, current: true },
    { name: 'Gestión citas', href: "route('treatments.admin')", icon: UsersIcon, current: false },
]

const sidebarOpen = ref(false)
</script>
<template>
    <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-gray-100">
    <body class="h-full">
    ```
  -->
    <div>

        <Head :title="title" />

        <TransitionRoot as="template" :show="sidebarOpen">
            <Dialog as="div" class="relative z-40 md:hidden" @close="sidebarOpen = false">
                <TransitionChild as="template" enter="transition-opacity ease-linear duration-300"
                    enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300"
                    leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
                </TransitionChild>

                <div class="fixed inset-0 flex z-40">
                    <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
                        enter-from="-translate-x-full" enter-to="translate-x-0"
                        leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
                        leave-to="-translate-x-full">
                        <DialogPanel class="relative flex-1 flex flex-col max-w-xs w-full bg-white">
                            <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0"
                                enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100"
                                leave-to="opacity-0">
                                <div class="absolute top-0 right-0 -mr-12 pt-2">
                                    <button type="button"
                                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                        @click="sidebarOpen = false">
                                        <span class="sr-only">Close sidebar</span>
                                        <XIcon class="h-6 w-6 text-white" aria-hidden="true" />
                                    </button>
                                </div>
                            </TransitionChild>
                            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                                <Link :href="route('home')" class="flex items-center flex-shrink-0 px-4">
                                <img class="mx-auto border-2 border-gray-100 hover:bg-gray-50 rounded-lg"
                                    src="/img/logo-hm-inkfree-madrid-mini.svg" alt="logo-brand">
                                </Link>
                                <nav class="mt-5 px-2 space-y-1">
                                    <Link :href="route('blog.admin')"
                                        :class="[route().current('blog.admin') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']">
                                    <component :is="HomeIcon"
                                        :class="[route().current('blog.admin') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-4 flex-shrink-0 h-6 w-6']"
                                        aria-hidden="true" />
                                    Gestión blog
                                    </Link>
                                    <Link :href="route('treatments.admin')"
                                        :class="[route().current('treatments.admin') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']">
                                    <component :is="UsersIcon"
                                        :class="[route().current('treatments.admin') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-4 flex-shrink-0 h-6 w-6']"
                                        aria-hidden="true" />
                                    Gestión citas
                                    </Link>
                                </nav>
                            </div>
                            <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                                <a href="#" class="flex-shrink-0 group block">
                                    <div class="flex items-center">
                                        <div>
                                            <img class="inline-block h-9 w-9 rounded-full object-cover"
                                                :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{
                                                    $page.props.user.name
                                            }}</p>
                                            <Link :href="route('profile.show')"
                                                class="text-xs font-medium text-gray-500 group-hover:text-gray-700">Ver
                                            perfil
                                            </Link>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                    <div class="flex-shrink-0 w-14">
                        <!-- Force sidebar to shrink to fit close icon -->
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <Link :href="route('home')" class="flex items-center flex-shrink-0 px-4">
                    <img class="mx-auto border-2 border-gray-100 hover:bg-gray-50 rounded-lg"
                        src="/img/logo-hm-inkfree-madrid-mini.svg" alt="logo-brand">
                    </Link>
                    <nav class="mt-5 flex-1 px-2 bg-white space-y-1">
                        <Link :href="route('blog.admin')"
                            :class="[route().current('blog.admin') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']">
                        <component :is="HomeIcon"
                            :class="[route().current('blog.admin') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-4 flex-shrink-0 h-6 w-6']"
                            aria-hidden="true" />
                        Gestión blog
                        </Link>
                        <Link :href="route('treatments.admin')"
                            :class="[route().current('treatments.admin') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']">
                        <component :is="UsersIcon"
                            :class="[route().current('treatments.admin') ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-4 flex-shrink-0 h-6 w-6']"
                            aria-hidden="true" />
                        Gestión citas
                        </Link>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                    <a href="#" class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-9 w-9 rounded-full object-cover"
                                    :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{
                                        $page.props.user.name
                                }}</p>
                                <Link :href="route('profile.show')"
                                    class="text-xs font-medium text-gray-500 group-hover:text-gray-700">Ver perfil
                                </Link>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="md:pl-64 flex flex-col flex-1">
            <div class="sticky top-0 z-10 md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
                <button type="button"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <MenuIcon class="h-6 w-6" aria-hidden="true" />
                </button>
            </div>
            <main class="flex-1">
                <slot />
            </main>
        </div>
    </div>
</template>

