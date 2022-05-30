<script setup>
import TreatmentLayout from '@/Pages/Public/treatments/TreatmentLayout.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <TreatmentLayout>
        <div class="">
            <!-- <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3" />
        </div> -->
            <div class="bg-white max-w-screen-xl z-0 mx-auto">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 z-40 relative">
                    <div class="sm:flex sm:items-baseline justify-center">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Tratamientos</h2>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                        <div
                            class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
                            <img src="/img/treatments/tratamiento-henna.jpeg"
                                alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee."
                                class="object-center object-cover group-hover:opacity-75" />
                            <div aria-hidden="true"
                                class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0" />
                            <div class="p-6 flex items-end sm:absolute sm:inset-0">
                                <div>
                                    <h3 class="font-semibold sm:text-white text-black">
                                        <Link :href="route('treatments.henna')">
                                        <span class="absolute inset-0" />
                                        Tratamiento de henna
                                        </Link>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm  sm:text-white text-black">Shop now</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
                            <img src="/img/treatments/tratamiento-henna-neutra.jpeg"
                                alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters."
                                class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full" />
                            <div aria-hidden="true"
                                class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0" />
                            <div class="p-6 flex items-end sm:absolute sm:inset-0">
                                <div>
                                    <h3 class="font-semibold sm:text-white text-black">
                                        <Link :href="route('treatments.henna.neutra')">
                                            <span class="absolute inset-0" />
                                            Tratamiento de henna neutra
                                        </Link>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm sm:text-white text-black">Shop now</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
                            <img src="/img/treatments/tratamiento-flor-manzanilla.jpeg"
                                alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
                                class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full" />
                            <div aria-hidden="true"
                                class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0" />
                            <div class="p-6 flex items-end sm:absolute sm:inset-0">
                                <div>
                                    <h3 class="font-semibold sm:text-white text-black">
                                        <Link :href="route('treatments.manzanilla')">
                                            <span class="absolute inset-0" />
                                            Tratamiento de flor de manzanilla
                                        </Link>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm sm:text-white text-black">Shop now</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
                            <img src="/img/treatments/tratamiento-ghassoul.jpeg"
                                alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
                                class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full" />
                            <div aria-hidden="true"
                                class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0" />
                            <div class="p-6 flex items-end sm:absolute sm:inset-0">
                                <div>
                                    <h3 class="font-semibold sm:text-white text-black">
                                        <Link :href="route('treatments.ghassoul')">
                                            <span class="absolute inset-0" />
                                            Tratamiento de ghassoul
                                        </Link>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm sm:text-white text-black">Shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TreatmentLayout>
</template>