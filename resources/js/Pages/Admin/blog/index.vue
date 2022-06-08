<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Pagination from '@/Jetstream/Pagination';
</script>

<script>
export default {
  components: {
    Pagination,
  },
  props: {
    posts: Object
  },
  methods: {
    destroy(post_id) {
      if (confirm('¿Estas seguro de que quieres eliminar este post?')) {
        this.$inertia.delete('/posts/' + post_id);
      }
    },
  }

};
</script>

<template>
  <!-- title="Administracion blog" -->
  <AdminLayout>
    <div class="py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
              <center>
                <h3 class="text-2xl leading-6 font-medium text-gray-900">Gestionar posts</h3>
              </center>
              <center>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Una lista con todos los posts donde podras editar o
                  eliminar..</p>
              </center>
            </div>
            <div class="mt-4 sm:mt-0 sm:flex-none">
              <Link :href="route('posts.create')">
              <button type="button"
                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Crear
                post</button>
              </Link>
            </div>
          </div>
          <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr class="divide-x divide-gray-200">
                        <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                          Id</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Titulo</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900"></th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <tr v-for="post in posts.data" :key="post.id" class="divide-x divide-gray-200">
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">{{
                            post.id
                        }}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{ post.title }}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-gray-500 space-x-4 flex justify-center">
                          <button type="button"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">Ver</button>
                          <Link :href="'posts/' + post.id + '/edit'">
                          <button type="button"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto">Editar</button>
                          </Link>
                          
                          <button type="button"  @click="destroy(post.id)"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto" >Eliminar</button>
                          
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <pagination class="mt-10 flex justify-center" :links="posts.links" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>