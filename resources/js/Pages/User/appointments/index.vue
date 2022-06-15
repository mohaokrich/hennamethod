<script setup>
import AppointmentLayout from '@/Pages/User/appointments/AppointmentLayout.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ref, onMounted } from 'vue'
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { RadioGroup, RadioGroupLabel, RadioGroupOption } from '@headlessui/vue'
import ModalInfo from '@/Jetstream/ModalInfo.vue';
import JetActionMessage from '@/Jetstream/ActionMessage.vue';
</script>
<script>
export default {
    name: "guardar-appointment",
    props: {
        errors: Object,
        treatments: Object,
        timeslots: Object,
        appointments: Object
    },
    mounted() {
        this.IncreseTime();
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'post',
                date: null,
                treatment_id: null,
                has_haircut: true,
                timeslot_id: null,

            }),
            toggleModal: false,
            treatment_title: '',
            treatment_desciption: '',
            offer: null,
            cheked: false,
            minutes: 0,
            actual_timeslots: []
        };
    },
    methods: {
        store() {
            this.form.post('/appointments');
            this.form.reset();
        },
        ShowDescription(treatment_id) {
            let treatment = _.find(this.treatments, { 'id': treatment_id });
            this.treatment_title = treatment.name;
            this.treatment_desciption = treatment.description;
            this.toggleModal = true;
        },
        IncreseTime() {
            this.minutes = 0;

            if (this.form.treatment_id != null) {
                this.minutes += 120;
            }

            if (this.form.has_haircut == true) {
                this.minutes += 60;
            }
            // console.log(this.minutes);
            this.showTimeslots();
        },
        showTimeslots() {
            let actual_minutes = this.minutes;
            this.actual_timeslots = _.filter(this.timeslots, function (o) { return o.duration == actual_minutes; });
        }, 
        destroy(appointment_id) {
            if (confirm('¿Estas seguro de que quieres cancelar esta cita?')) {
                this.$inertia.delete('/appointments/' + appointment_id);
            }
        },
    }
};
</script>

<template>
    <AppointmentLayout>
        <div class="flex h-[73rem] w-full flex-col">
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
                        <ol class="mt-4 space-y-1 text-sm leading-6 text-gray-500 md:px-14 overflow-auto">
                            <li v-for="appointment in appointments" :key="appointment.id"
                                class="group flex items-center space-x-4 rounded-xl py-2 px-4 focus-within:bg-gray-100 bg-gray-100 hover:bg-gray-50">
                                <img :src="$page.props.user.profile_photo_url" alt=""
                                    class="h-10 w-10 flex-none rounded-full" />
                                <div class="flex-auto">
                                    <p class="text-gray-900">{{ appointment.name }}</p>
                                    <p class="mt-0.5">
                                        <time :datetime="appointment.start_time">{{ appointment.start_time }}</time> -
                                        <time :datetime="appointment.end_time">{{ appointment.end_time }}</time>
                                        <br>
                                        <date class="font-semibold">{{ appointment.date }}</date>
                                    </p>
                                </div>
                                <button @click="destroy(appointment.id)" class="hover:bg-[#BF0000] p-3 font-extrabold text-black bg-[#FA0000] rounded-lg">
                                    cancelar
                                </button>
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
                            <div class="text-red-600" v-if="errors.date">{{ errors.date }}</div>

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
                                            <input :id="treatment.id" @change="IncreseTime()"
                                                v-model="form.treatment_id" name="treatment" :value="treatment.id"
                                                type="radio" :checked="treatment.id === null"
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
                            <div class="text-red-600" v-if="errors.treatment">{{ errors.treatment }}</div>
                            <hr>
                            <fieldset>
                                <center>
                                    <legend>Corte de pelo</legend>
                                </center>
                                <div>
                                    <input type="radio" class="checked:bg-gray-900 focus:ring-gray-900 text-gray-900"
                                        id="si" name="opcion" v-model="form.has_haircut" :value="true"
                                        @change="IncreseTime()" checked>
                                    <label class="ml-2" for="si">si</label>
                                </div>

                                <div>
                                    <input type="radio" class="checked:bg-gray-900 focus:ring-gray-900 text-gray-900"
                                        id="no" name="opcion" v-model="form.has_haircut" @change="IncreseTime()"
                                        :value="false">
                                    <label class="ml-2" for="no">no</label>
                                </div>
                            </fieldset>
                            <div class="text-red-600" v-if="errors.has_haircut">{{ errors.has_haircut }}</div>
                            <hr>
                            <div>
                                <div>
                                    <center>
                                        <h2>Horas disponibles</h2>
                                    </center>
                                    <div>
                                        <RadioGroup v-model="form.timeslot_id" class="mt-2">
                                            <RadioGroupLabel class="sr-only"> Choose a memory option </RadioGroupLabel>
                                            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6 place-items-center">
                                                <RadioGroupOption as="template" v-for="timeslot in actual_timeslots"
                                                    :key="timeslot.id" :value="timeslot.id"
                                                    :disabled="!timeslot.is_active" v-slot="{ active, checked }">
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
                            <div class="text-red-600" v-if="errors.timeslot_id">{{ errors.timeslot_id }}</div>
                            <hr>
                            <center><button type="submit"
                                    class="inline-flex mt-20 items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-700 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">Solicitar</button>
                                <JetActionMessage :on="form.recentlySuccessful" class="mt-3 text-lg">
                                    La cita se ha solicitado correctamente.
                                </JetActionMessage>
                            </center>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </AppointmentLayout>
</template>