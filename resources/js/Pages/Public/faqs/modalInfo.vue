<script>
    export default {
    name: "modal",
    emits: ["close"],
    data() {
        return {
                
        };
    },
    created() {
        // props are exposed on `this`
        // console.log(this.title)
    },
    props: {
        title: String,
        description: String,
        toggleModal: Boolean,
    },
    methods: {}
    
    };
</script>

<template>
    <div v-if="toggleModal" class="absolute z-40 inset-0 opacity-25 bg-black">

    </div>
    <div v-if="toggleModal" class="fixed overflow-x-auto overflow-y-auto inset-0 flex justify-center items-center z-50">
      <div v-if="toggleModal" class="relative mx-auto max-w-2xl">
        <div class="w-full bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full sm:p-6">
          <div class="sm:flex sm:items-start"> 
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900">{{ title }}</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">{{ description }}</p>
              </div>
            </div>
          </div>
          <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <button type="button"
              class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm"
              @click="$emit('close')">OK</button>
          </div>
        </div>
      </div>
    </div>
</template>