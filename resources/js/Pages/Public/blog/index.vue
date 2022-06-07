<script setup>
import BlogLayout from '@/Pages/Public/blog/BlogLayout.vue'
import Pagination from '@/Jetstream/Pagination';
</script>

<script>
export default {
    components: {
        Pagination,
    },
    props: {
        posts: Object,
    },
    methods: {}

};
</script>

<template>
    <BlogLayout>
        <div class="relative py-16 bg-white overflow-hidden max-w-7xl mx-auto z-30">
            <div class="flex flex-wrap mb-12 md:mb-20 p-5">
                <div v-for="post in posts.data" :key="post.title"
                    class="max-w-full flex flex-col md:flex-row justify-center">
                    <a class="block mb-6 overflow-hidden rounded-md md:w-96 mx-auto" :href="'/' + post.title_slug">
                        <img class="object-cover h-96 w-full" :src="post.image_full_path" :alt="post.title">
                    </a>
                    <div class="md:w-[48rem] md:pl-10">
                        <a
                            class="inline-block mb-4 text-2xl leading-tight text-coolGray-800 hover:text-coolGray-900 font-bold hover:underline" :href="'/' + post.title_slug">
                            {{ post.title }}</a>
                        <p class="mb-4 text-base md:text-lg text-coolGray-400 font-medium">{{ post.excerpt }}</p>
                        <p class="mb-4 text-base md:text-sm text-coolGray-300 font-medium">{{ post.author }} | {{
                                post.post_creation
                        }}</p>
                        <!-- <a class="inline-flex items-center text-base md:text-lg text-primary hover:text-gsecondary font-semibold"
                            :href="post.href">
                            <span class="mr-3">Leer más</span>
                            <x-heroicon-s-arrow-sm-right class="w-6 h-6" />
                        </a> -->
                    </div>
                </div>
            </div>
            <pagination class="mt-10 flex justify-center" :links="posts.links" />
        </div>
    </BlogLayout>
</template>