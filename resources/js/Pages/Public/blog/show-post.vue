<script setup>
    import BlogLayout from '@/Pages/Public/blog/BlogLayout.vue'
</script>
<script>
export default {
    props: {
        post: Object,
    },
    methods: {}

};
</script>   

<template>
    <BlogLayout>
        <div class="relative py-16 bg-white overflow-hidden max-w-6xl h-[83rem] mx-auto z-30">
            <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
                <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                    <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                        viewBox="0 0 404 384">
                        <defs>
                            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
                    </svg>
                    <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404"
                        height="384" fill="none" viewBox="0 0 404 384">
                        <defs>
                            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                    </svg>
                    <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384"
                        fill="none" viewBox="0 0 404 384">
                        <defs>
                            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
                    </svg>
                </div>
            </div>
            <div class="relative px-4 sm:px-6 lg:px-8 z-30">
                <div class="text-lg max-w-prose mx-auto">
                    <h1 class="mx-auto">
                        <span
                            class="block text-base text-center text-black font-semibold tracking-wide uppercase">{{ post.author }}</span>
                        <span
                            class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ post.title }}</span>
                    </h1>
                </div>
                <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                    <figure>
                        <img class="w-full rounded-lg"
                            :src="post.image_full_path"
                            alt="" width="1310" height="873" />
                        <!-- <figcaption>Sagittis scelerisque nulla cursus in enim consectetur quam.</figcaption> -->
                    </figure>
                    <p>{{ post.body }}</p>
                </div>
            </div>
        </div>
    </BlogLayout>
</template>