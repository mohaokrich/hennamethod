<script setup>
import AppointmentLayout from '@/Pages/User/appointments/AppointmentLayout.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ref, onMounted } from 'vue'
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { RadioGroup, RadioGroupLabel, RadioGroupOption } from '@headlessui/vue'
import ModalInfo from '@/Jetstream/ModalInfo.vue';


// const timeslots = [
//     { timeslot: '10:00-12:00', inStock: true },
//     { timeslot: '12:00-14:00', inStock: true },
//     { timeslot: '11:00-13:00', inStock: true },
//     { timeslot: '13:00-15:00', inStock: true },
//     { timeslot: '17:00-19:00', inStock: true },
//     { timeslot: '16:00-18:00', inStock: false },
// ]

// const mem = ref(timeslots[2])

// const container = ref(null)
// const containerNav = ref(null)
// const containerOffset = ref(null)
const meetings = [
    {
        id: 1,
        name: 'Leslie Alexander',
        imageUrl:
            'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        start: '1:00 PM',
        startDatetime: '2022-01-21T13:00',
        end: '2:30 PM',
        endDatetime: '2022-01-21T14:30',
    },
]
const mailingLists = [
    { id: 1, title: 'Newsletter', description: 'Last message sent an hour ago', users: '621 users' },
    { id: 2, title: 'Existing Customers', description: 'Last message sent 2 weeks ago', users: '1200 users' },
    { id: 3, title: 'Trial Users', description: 'Last message sent 4 days ago', users: '2740 users' },
]
const options = [
    { name: 'si', value: true, bgColor: 'bg-pink-500', selectedColor: 'ring-pink-500' },
    { name: 'no', value: false, bgColor: 'bg-purple-500', selectedColor: 'ring-purple-500' },
]
const sides = [
    { id: null, name: 'None' },
    { id: 1, name: 'Baked beans' },
    { id: 2, name: 'Coleslaw' },
    { id: 3, name: 'French fries' },
    { id: 4, name: 'Garden salad' },
    { id: 5, name: 'Mashed potatoes' },
]

</script>
<script>
export default {
    name: "guardar-appointment",
    props: {
        errors: Object,
        treatments: Object,
        timeslots: Object,
    },
    mounted() {
        this.IncreseTime();
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'post',
                date: null,
                treatment: null,
                has_haircut: true,
                timeslot: null,

            }),
            toggleModal: false,
            treatment_title: '',
            treatment_desciption: '',
            offer: null,
            cheked: false,
            minutes: 0,
            actual_timeslots:[]
        };
    },
    methods: {
        store() {
            this.form.post('/posts');
        },
        ShowDescription(treatment_id) {
            let treatment = _.find(this.treatments, { 'id': treatment_id });

            this.treatment_title = treatment.name;
            this.treatment_desciption = treatment.description;
            this.toggleModal = true;
        },
        IncreseTime(){
            this.minutes = 0;

            if (this.form.treatment != null) {
                this.minutes += 120;
            } 
            
            if(this.form.has_haircut == true){
                this.minutes += 60;
            }

            this.showTimeslots();
        },
        showTimeslots() {
            //this.actual_timeslots = _.findIndex(this.timeslots, function(o) { return o.minutes == this.minutes; });
        }   
    }
};
</script>

<template>
    <AppointmentLayout>
        <div class="flex h-full w-full flex-col">
            <!-- <header
                class="relative z-20 flex flex-none items-center justify-between border-b border-gray-200 py-4 px-6">
                <div class="flex items-center">
                </div>
            </header> -->
            <div class="flex flex-col md:flex-row p-10 md:p-0 bg-white rounded-lg">
                <div class="md:w-2/5">
                    <section class="">
                        <center>
                            <h2 class="text-2xl font-semibold text-gray-900 pt-2 border-gray-100 border-b-2">Proximas
                                citas</h2>
                        </center>
                        <ol class="mt-4 space-y-1 text-sm leading-6 text-gray-500 md:px-14">
                            <li v-for="meeting in meetings" :key="meeting.id"
                                class="group flex items-center space-x-4 rounded-xl py-2 px-4 focus-within:bg-gray-100 bg-gray-100 hover:bg-gray-50">
                                <img :src="meeting.imageUrl" alt="" class="h-10 w-10 flex-none rounded-full" />
                                <div class="flex-auto">
                                    <p class="text-gray-900">{{ meeting.name }}</p>
                                    <p class="mt-0.5">
                                        <time :datetime="meeting.startDatetime">{{ meeting.start }}</time> -
                                        <time :datetime="meeting.endDatetime">{{ meeting.end }}</time>
                                    </p>
                                </div>
                                <Menu as="div"
                                    class="relative opacity-0 focus-within:opacity-100 group-hover:opacity-100">
                                    <div>
                                        <MenuButton
                                            class="-m-2 flex items-center rounded-full p-1.5 text-gray-500 hover:text-gray-600">
                                            <span class="sr-only">Open options</span>
                                            <DotsVerticalIcon class="h-6 w-6" aria-hidden="true" />
                                        </MenuButton>
                                    </div>

                                    <transition enter-active-class="transition ease-out duration-100"
                                        enter-from-class="transform opacity-0 scale-95"
                                        enter-to-class="transform opacity-100 scale-100"
                                        leave-active-class="transition ease-in duration-75"
                                        leave-from-class="transform opacity-100 scale-100"
                                        leave-to-class="transform opacity-0 scale-95">
                                        <MenuItems
                                            class="absolute right-0 z-10 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                            <div class="py-1">
                                                <MenuItem v-slot="{ active }">
                                                <a href="#"
                                                    :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Edit</a>
                                                </MenuItem>
                                                <MenuItem v-slot="{ active }">
                                                <a href="#"
                                                    :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Cancel</a>
                                                </MenuItem>
                                            </div>
                                        </MenuItems>
                                    </transition>
                                </Menu>
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="md:w-3/5 flex-none md:border-l-2 border-gray-100 pb-10 md:block">
                    <center>
                        <h2 class="text-2xl font-semibold text-gray-900 border-gray-100 pt-2 border-b-2">Pedir cita</h2>
                    </center>
                    <section>
                        <form @submit.prevent="store" class="pb-5 md:px-14 space-y-5">
                            <br>
                            <center>
                                <legend>Día</legend>
                                <input type="date" v-model="form.date" class="rounded-lg bg-gray-100 border-none p-3">
                            </center>
                            <hr>
                            <fieldset>
                                <center>
                                    <legend>Tratamiento</legend>
                                </center>
                                <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
                                    <div v-for="treatment in treatments" :key="treatment.id"
                                        class="relative flex items-start py-4">
                                        <div class="min-w-0 flex-1 flex text-sm">
                                            <label :for="treatment.id" class="font-medium text-gray-700 select-none">{{
                                                    treatment.name
                                            }}</label>
                                            <input :id="treatment.id" @change="IncreseTime()" v-model="form.treatment"
                                                name="treatment" type="radio" :checked="treatment.id === null"
                                                class="focus:ring-gray-900 h-4 w-4 text-gray-900 border-gray-900 ml-2" />
                                        </div>
                                        <button @click="ShowDescription(treatment.id)" type="button">
                                            <div class="space-y-6">
                                                <div class="space-y-2">
                                                    <div class="text-sm underline focus:none-underline">
                                                        <h3>descripcion</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <ModalInfo :title="treatment_title" :description="treatment_desciption"
                                        :toggleModal="toggleModal" @close="toggleModal = false"></ModalInfo>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <center>
                                    <legend>Corte de pelo</legend>
                                </center>
                                <div>
                                    <input type="radio" class="checked:bg-gray-900 focus:ring-gray-900 text-gray-900"
                                        id="si" name="opcion" v-model="form.has_haircut" :value="true" @change="IncreseTime()" checked>
                                    <label class="ml-2" for="si">si</label>
                                </div>

                                <div>
                                    <input type="radio" class="checked:bg-gray-900 focus:ring-gray-900 text-gray-900"
                                        id="no" name="opcion" v-model="form.has_haircut" @change="IncreseTime()" :value="false">
                                    <label class="ml-2" for="no">no</label>
                                </div>
                            </fieldset>
                            <hr>
                            <div>
                                <div>
                                    <center>
                                        <h2>Horas disponibles</h2>
                                    </center>
                                    <div>
                                        <RadioGroup v-model="mem" class="mt-2">
                                            <RadioGroupLabel class="sr-only"> Choose a memory option </RadioGroupLabel>
                                            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6 place-items-center">
                                                <RadioGroupOption as="template" v-for="timeslot in actual_timeslots"
                                                    :key="timeslot.id" :value="timeslot" :disabled="!timeslot.is_active"
                                                    v-slot="{ active, checked }">
                                                    <div
                                                        :class="[timeslot.is_active ? 'cursor-pointer focus:outline-none' : 'opacity-25 cursor-not-allowed', active ? 'ring-2 ring-offset-2 ring-gray-700' : '', checked ? 'bg-gray-700 border-transparent text-white hover:bg-gray-600' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-600 hover:text-white', 'border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1']">
                                                        <RadioGroupLabel as="span">
                                                            {{ timeslot.start_time }} : {{ timeslot.end_time }}
                                                        </RadioGroupLabel>
                                                    </div>
                                                </RadioGroupOption>
                                            </div>
                                        </RadioGroup>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <center><button type="submit" @click="showMinutes()"
                                    class="inline-flex mt-20 items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-700 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">Solicitar</button>
                            </center>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </AppointmentLayout>
</template>