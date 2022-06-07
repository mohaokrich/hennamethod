<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import HomeLayout from '@/Pages/Public/home/HomeLayout.vue'
</script>

<script>
export default {
    components: {

    },
    props: {
        posts: Object,
    },
    methods: {}

};
</script>

<template>
    <HomeLayout>
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
           
        </div> -->
        <div class="max-w-full h-128 bg-cover flex items-center overflow-hidden shadow-xl sm:rounded-lg"
            style="background-image: url('/img/home/woman-long-hair.jpg');">
            <h1 class="main-quote space-x-1 mx-auto text-gray-50 font-extrabold text-3xl px-4 md:px-0">
                <span>There</span>
                <span>are</span>
                <span>no</span>
                <span>limits</span>
                <span>to</span>
                <span>what</span>
                <span>you</span>
                <span>can</span>
                <span>accomplish,</span>
                <span>except</span>
                <span>the</span>
                <span>limits</span>
                <span>you</span>
                <span>place</span>
                <span>on</span>
                <span>your</span>
                <span>own</span>
                <span>thinking.</span>
            </h1>
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->

        <div class="bg-white overflow-hidden shadow rounded-lg max-w-3xl mx-auto my-12 text-gray-600">
            <div class="px-4 py-5 sm:px-6">
                <center>¿La calidad de nuestros tratamientos? Inmejorable</center>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:p-6 h-64 relative bg-cover bg-center"
                style="background-image: url('/img/treatments/tratamiento-henna.jpeg');">
                <button
                    class="carousel-control-prev absolute pl-2 top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-left-circle visually-hidden" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                </button>
                <button
                    class="carousel-control-next absolute pr-2 top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right-circle visually-hidden" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </button>
                <!-- Indicators -->
                <div class="carousel-indicator absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 space-x-3">
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0"
                        class="active bg-gray-400 h-1 w-10" aria-current="true" aria-label="Slide 1"></button>
                    <button data-bs-target="#carouselDarkVariant" class="bg-gray-300 h-1 w-10" data-bs-slide-to="1"
                        aria-label="Slide 1"></button>
                    <button data-bs-target="#carouselDarkVariant" class="bg-gray-300 h-1 w-10" data-bs-slide-to="2"
                        aria-label="Slide 1"></button>
                    <button data-bs-target="#carouselDarkVariant" class="bg-gray-300 h-1 w-10" data-bs-slide-to="2"
                        aria-label="Slide 1"></button>
                </div>
            </div>
        </div>


        <!-- POSTS -->
        <div class="relative  pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3" />
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">From the blog</h2>
                    <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor sit amet
                        consectetur,
                        adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
                </div>
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                    <div v-for="post in posts" :key="post.title"
                        class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" :src="post.image_full_path" :alt="post.title" />
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a :href="'/' + post.title_slug" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ post.title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ post.excerpt }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="sr-only">{{ post.author }}</span>
                                    <!-- <img class="h-10 w-10 rounded-full" :src="post.author.imageUrl" alt="" /> -->
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        <!-- <a :href="post.author.href" class="hover:underline"> -->
                                            {{ post.author }}
                                        <!-- </a> -->
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time>
                                            {{ post.post_creation }}
                                        </time>
                                        <!-- <span aria-hidden="true"> &middot; </span>
                                        <span> {{ post.readingTime }} read </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>