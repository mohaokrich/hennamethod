<script setup>
import ContactLayout from '@/Pages/Public/contact/ContactLayout.vue'
</script>

<template>
    <ContactLayout>
        <div class="flex flex-col lg:flex-row justify-center p-10 bg-white">
            <div class="relative w-full lg:w-2/4 h-96 overflow-hidden pb-10 lg:pb-0 mx-auto lg:mx-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1518.968533316709!2d-3.707055041759011!3d40.41024493713632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d5ad4712d9%3A0xbc9ae482ff0d24ea!2sHenna%20method%20madrid!5e0!3m2!1ses!2sus!4v1653872586786!5m2!1ses!2sus"
                    width="600" class="absolute w-full h-full top-0 bottom-0 right-0 left-0 rounded-lg" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mx-auto">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300" />
                    </div>
                    <div class="relative flex justify-center">
                        <span class="px-3 bg-white text-lg font-medium text-gray-900"> Informacion de contacto </span>
                    </div>
                </div>
                <div class="mx-auto space-y-8 mt-5 mb-20">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-telephone-fill mr-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <h3><a href="tel:+34 910 85 25 07">910 85 25 07</a></h3>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-envelope-fill mr-2" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                        <h3><a href="mailto:hennamethod@gmail.com">hennamethod@gmail.com</a></h3>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-clock-fill mr-2 mt-1" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                        </svg>
                        <h3>martes - sábado (10:00 - 18:30)</h3>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-map-fill mr-2 mt-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                        </svg>
                        <h3><a href="https://www.google.com/maps/dir//Henna+method+madrid,+C.+de+las+Dos+Hermanas,+19,+28012+Madrid,+Espa%C3%B1a/@40.410243,-3.705961,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd4227d5ad4712d9:0xbc9ae482ff0d24ea!2m2!1d-3.7059607!2d40.4102429?hl=es"
                                target="_blank">Calle Dos Hermanas, 19 28012 Madrid</a></h3>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300" />
                    </div>
                    <div class="relative flex justify-center">
                        <span class="px-3 bg-white text-lg font-medium text-gray-900"> Redes sociales </span>
                    </div>
                </div>
                <div class="flex space-x-4 justify-center mt-5">
                    <a href="#" class="text-black hover:text-gray-500" target="_blank">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/hennamethod/?hl=es" class="text-black hover:text-gray-500"
                        target="_blank">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://twitter.com/hennamethod" class="text-black hover:text-gray-500" target="_blank">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
            <h3 class="text-lg font-medium text-gray-900">Envianos un mensaje</h3>
            <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                <div>
                    <label for="first-name" class="block text-sm font-medium text-gray-900">Nombre</label>
                    <div class="mt-1">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" />
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-medium text-gray-900">Apellidos</label>
                    <div class="mt-1">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" />
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" />
                    </div>
                </div>
                <div>
                    <div class="flex justify-between">
                        <label for="phone" class="block text-sm font-medium text-gray-900">Numero telf</label>
                        <span id="phone-optional" class="text-sm text-gray-500">Optional</span>
                    </div>
                    <div class="mt-1">
                        <input type="text" name="phone" id="phone" autocomplete="tel"
                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            aria-describedby="phone-optional" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="subject" class="block text-sm font-medium text-gray-900">Asunto</label>
                    <div class="mt-1">
                        <input type="text" name="subject" id="subject"
                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="flex justify-between">
                        <label for="message" class="block text-sm font-medium text-gray-900">Mensaje</label>
                        <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span>
                    </div>
                    <div class="mt-1">
                        <textarea id="message" name="message" rows="4"
                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"
                            aria-describedby="message-max" />
                    </div>
                </div>
                <div class="sm:col-span-2 sm:flex sm:justify-end">
                    <button type="submit"
                        class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto">Enviar</button>
                </div>
            </form>
        </div>
    </ContactLayout>
</template>