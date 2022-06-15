<script setup>
import FaqsLayout from '@/Pages/Public/faqs/FaqsLayout.vue'
import { Link } from '@inertiajs/inertia-vue3';
import ModalInfo from '@/Jetstream/ModalInfo.vue';


const questions = [
  {
    id: 1,
    title: '¿Que es la henna y para que sirve?',
    imageUrl: '/img/treatments/tratamiento-henna.jpeg',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis nobis accusantium? Tempore eaque nostrum, soluta sed cum consectetur magni natus suscipit inventore voluptatum numquam, nihil itaque veritatis laborum delectus.'
  },
  {
    id: 2,
    title: '¿Qué beneficios trae la henna?',
    imageUrl: '/img/treatments/tratamiento-henna-neutra.jpeg',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis nobis accusantium? Tempore eaque nostrum, soluta sed cum consectetur magni natus suscipit inventore voluptatum numquam, nihil itaque veritatis laborum delectus.'
  },
  {
    id: 3,
    title: '¿Para quién es ideal la henna neutra?',
    imageUrl: '/img/home/woman-with-culy-hair.jpg',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis nobis accusantium? Tempore eaque nostrum, soluta sed cum consectetur magni natus suscipit inventore voluptatum numquam, nihil itaque veritatis laborum delectus.'
  },
  {
    id: 4,
    title: '¿Qué es el índigo ( Indigofera tinctoria) ?',
    imageUrl: '/img/treatments/indigo-plant.jpg',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis nobis accusantium? Tempore eaque nostrum, soluta sed cum consectetur magni natus suscipit inventore voluptatum numquam, nihil itaque veritatis laborum delectus.'
  },
  {
    id: 5,
    title: '¿Que es la henna y para que sirve?',
    imageUrl: '/img/treatments/tratamiento-henna.jpeg',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis nobis accusantium? Tempore eaque nostrum, soluta sed cum consectetur magni natus suscipit inventore voluptatum numquam, nihil itaque veritatis laborum delectus.'
  },
  {
    id: 6,
    title: '¿Que es la henna y para que sirve?',
    imageUrl: '/img/treatments/tratamiento-henna.jpeg',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quis nobis accusantium? Tempore eaque nostrum, soluta sed cum consectetur magni natus suscipit inventore voluptatum numquam, nihil itaque veritatis laborum delectus.'
  },
]
</script>

<script>
export default {
  name: "modal",
  data() {
    return {
      toggleModal: false,
      question_title: '',
      question_desciption: '',
      offer: null
    };
  },
  methods: {
    ShowDescription(question_id){
      let question = _.find(this.questions, { 'id': question_id });

      this.question_title = question.title;
      this.question_desciption = question.description;

      this.toggleModal = true;
    }
  }
};
</script>

<template>
  <FaqsLayout>
    <div class="bg-white">
      <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24 content-center">
        <div class="space-y-12">
          <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Preguntas Frecuentes - FAQS</h2>
            <p class="text-xl text-gray-500">Ornare sagittis, suspendisse in hendrerit quis. Sed dui aliquet
              lectus sit pretium egestas vel mattis neque.</p>
          </div>
          <ul role="list"
            class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">
            <li v-for="question in questions" :key="question.id">
              <button @click="ShowDescription(question.id)" type="button">
                <div class="space-y-6">
                  <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56 object-cover" :src="question.imageUrl"
                    alt="" />
                  <div class="space-y-2">
                    <div class="text-lg leading-6 font-medium space-y-1">
                      <h3>{{ question.title }}</h3>
                    </div>
                  </div>
                </div>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ModalInfo 
      :title="question_title"
      :description="question_desciption"
      :toggleModal="toggleModal"
      @close="toggleModal = false"
    ></ModalInfo>
  </FaqsLayout>
</template>