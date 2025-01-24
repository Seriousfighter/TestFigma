<template>
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="max-w-2xl space-y-8">
                    <h1 class="font-inter text-4xl md:text-5xl font-bold text-gray-900">
                        Transform Your Digital Experience
                    </h1>
                    <p class="text-lg text-gray-600">
                        Discover innovative solutions that elevate your digital presence and streamline your workflow.
                    </p>
                    <div class="flex gap-4">
                        <Link
                            :href="route('contact')"
                            class="w-[205px] h-[39px] 
                                bg-GreenOne 
                                rounded-full 
                                font-inter 
                                font-bold 
                                text-black 
                                hover:opacity-90 
                                transition-all 
                                animate-pulse-slow
                                flex items-center justify-center">
                            Get Started
                        </Link>
                        <Link 
                        :href="route('services')"
                        class="w-[205px] h-[39px] flex items-center justify-center bg-white border-2 border-gray-300 rounded-full font-inter font-bold text-gray-700 hover:bg-gray-50 transition-all">
                            Learn More
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>