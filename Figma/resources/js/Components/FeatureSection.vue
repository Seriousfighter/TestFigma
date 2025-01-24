<template>
    <section class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-inter text-3xl font-bold mb-4">Our Services</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Explore our comprehensive suite of solutions designed to help you succeed
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="(feature, index) in features" :key="index" 
                        class="bg-white rounded-[50px] p-8 shadow-lg hover:shadow-xl transition-all">
                        <h3 class="font-inter text-xl font-bold mb-4">{{ feature.title }}</h3>
                        <p class="text-gray-600 mb-6">{{ feature.description }}</p>
                        <button class="text-black font-inter font-medium hover:underline hover:bg-GreenOne hover:rounded-xl hover:px-2">
                            Learn more →
                        </button>
                    </div>
                </div>
            </div>
        </section>
</template>
<script setup>
const features = [
    {
        title: 'Digital Innovation',
        description: 'Transform your business with cutting-edge digital solutions and strategies.'
    },
    {
        title: 'Smart Automation',
        description: 'Streamline your workflows with intelligent automation tools.'
    },
    {
        title: 'Data Analytics',
        description: 'Make informed decisions with powerful data analytics and insights.'
    }
]
</script>