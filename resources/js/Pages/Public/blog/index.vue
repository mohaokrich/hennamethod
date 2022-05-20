<script setup>
import BlogLayout from '@/Pages/Public/blog/BlogLayout.vue'

const posts = [
    {
        title: 'Boost your conversion rate',
        href: '#',
        category: { name: 'Article', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.',
        date: 'Mar 16, 2020',
        datetime: '2020-03-16',
        imageUrl:
            'https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '6 min',
        author: {
            name: 'Roel Aufderehar',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
    {
        title: 'How to use search engine optimization to drive sales',
        href: '#',
        category: { name: 'Video', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.',
        date: 'Mar 10, 2020',
        datetime: '2020-03-10',
        imageUrl:
            'https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '4 min',
        author: {
            name: 'Brenna Goyette',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
    {
        title: 'Improve your customer experience',
        href: '#',
        category: { name: 'Case Study', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.',
        date: 'Feb 12, 2020',
        datetime: '2020-02-12',
        imageUrl:
            'https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '11 min',
        author: {
            name: 'Daniela Metz',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
    {
        title: 'Improve your customer experience',
        href: '#',
        category: { name: 'Case Study', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.',
        date: 'Feb 12, 2020',
        datetime: '2020-02-12',
        imageUrl:
            'https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '11 min',
        author: {
            name: 'Daniela Metz',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
    {
        title: 'Improve your customer experience',
        href: '#',
        category: { name: 'Case Study', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.',
        date: 'Feb 12, 2020',
        datetime: '2020-02-12',
        imageUrl:
            'https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '11 min',
        author: {
            name: 'Daniela Metz',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },

]
</script>

<template>
    <BlogLayout>
        <div class="relative py-16 bg-white overflow-hidden max-w-7xl mx-auto z-30">
            <div class="flex flex-wrap mb-12 md:mb-20 p-5">
                <div v-for="post in posts" :key="post.title" class="max-w-full flex flex-col md:flex-row justify-center">
                    <a class="block mb-6 overflow-hidden rounded-md md:w-2/4" :href="post.href">
                        <img class="object-cover h-96 w-full" :src="post.imageUrl" alt="">
                    </a>
                    <div class="md:w-2/4 md:pl-10">
                        <a class="inline-block mb-4 text-2xl leading-tight text-coolGray-800 hover:text-coolGray-900 font-bold hover:underline"
                            :href="post.href">{{ post.title }}</a>
                        <p class="mb-4 text-base md:text-lg text-coolGray-400 font-medium">{{ post.description }}</p>
                        <p class="mb-4 text-base md:text-sm text-coolGray-300 font-medium">{{ post.author.name}} | {{ post.datetime}}</p>
                        <a class="inline-flex items-center text-base md:text-lg text-primary hover:text-gsecondary font-semibold"
                            :href="post.href">
                            <span class="mr-3">Leer más</span>
                            <x-heroicon-s-arrow-sm-right class="w-6 h-6" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </BlogLayout>
</template>