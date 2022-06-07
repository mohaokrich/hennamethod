<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
const people = [
    { name: 'Lindsay Walton', title: 'Front-end Developer', email: 'lindsay.walton@example.com', role: 'Member' },
    // More people...
]
</script>

<script>
export default {
    name: "crear-post",
    props: {
        errors: Object,
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'post',
                title: null,
                title_slug: null,
                body: null,
                author: null,
                post_creation: null,
                photo: null,
                excerpt: null,
            }),
        };
    },
    methods: {
        store() {
            this.form.post('/posts');
        },
    }
};
</script>

<template>
    <!-- title="Administracion blog" -->
    <AdminLayout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <form @submit.prevent="store" class="space-y-8 divide-y divide-gray-200">
                    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                        <div>
                            <div>
                                <center>
                                    <h3 class="text-2xl leading-6 font-medium text-gray-900">Crear post</h3>
                                </center>
                                <center>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Aquí podras crear tus posts.</p>
                                </center>
                            </div>

                            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="title" class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        titulo <span class="text-red-500">*</span></label>
                                    <div class="mt-1 sm:mt-0">
                                        <input id="title" name="title" v-model="form.title" type="text"
                                            autocomplete="title"
                                            class="block max-w-full w-full shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                    <div class="text-red-600" v-if="errors.title">{{ errors.title }}</div>
                                    
                                </div>
                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="slug" class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Slug
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <div class="mt-1 sm:mt-0 ">
                                        <div class="max-w-full flex rounded-md shadow-sm">
                                            <span
                                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                hennamethod.com/ </span>
                                            <input type="text" name="title_slug" id="slug" autocomplete="slug"
                                                v-model="form.title_slug"
                                                class="flex-1 block max-w-full focus:ring-gray-500 focus:border-gray-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300" />
                                        </div>
                                    <div class="text-red-600" v-if="errors.title_slug">{{ errors.title_slug }}</div>
                                    </div>
                                </div>

                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="cuerpo"
                                        class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Cuerpo </label>
                                    <div class="mt-1 sm:mt-0 ">
                                        <textarea id="cuerpo" v-model="form.body" name="body" rows="3"
                                            class="max-w-full shadow-sm block w-full focus:ring-gray-500 focus:border-v-500 sm:text-sm border border-gray-300 rounded-md" />
                                        <p class="mt-2 text-sm text-gray-500">Escribe aquí el contenido de tu articulo.
                                        </p>
                                    </div>
                                     <div class="text-red-600" v-if="errors.body">{{ errors.body }}</div>
                                </div>

                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="autor" class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Autor
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <div class="mt-1 sm:mt-0">
                                        <input id="autor" v-model="form.author" name="author" type="text"
                                            autocomplete="autor"
                                            class="block max-w-full w-full shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                     <div class="text-red-600" v-if="errors.author">{{ errors.author }}</div>
                                </div>

                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="fecha" class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Fecha
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <div class="mt-1 sm:mt-0">
                                        <input id="fecha" v-model="form.post_creation" name="post_creation" type="date"
                                            autocomplete="fecha"
                                            class="block max-w-full w-full shadow-sm focus:ring-gray-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                     <div class="text-red-600" v-if="errors.post_creation">{{ errors.post_creation }}</div>
                                </div>

                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="imagen"
                                        class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2"> Imagen
                                    </label>
                                    <div class="mt-1 sm:mt-0 ">
                                        <div
                                            class="max-w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer bg-white rounded-md text-black font-extrabold hover:text-gray-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                                                        <input id="file-upload" @input="form.photo = $event.target.files[0]" name="photo"
                                                            type="file" />
                                                    </label>
                                                </div>
                                                <p class="pl-1">o arrastra y suelta</p>
                                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-red-600" v-if="errors.photo">{{ errors.photo }}</div>
                                </div>

                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="texto" class="block text-xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Extracto
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <div class="mt-1 sm:mt-0 ">
                                        <textarea id="extracto" v-model="form.excerpt" name="excerpt" rows="3"
                                            class="max-w-full shadow-sm block w-full focus:ring-gray-500 focus:border-v-500 sm:text-sm border border-gray-300 rounded-md" />
                                    </div>
                                    <div class="text-red-600" v-if="errors.excerpt">{{ errors.excerpt }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <button type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Cancelar</button>
                            <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>
