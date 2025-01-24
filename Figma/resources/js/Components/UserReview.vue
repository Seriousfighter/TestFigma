<template>
    <div class="bg-gray-800/70 rounded-[50px] p-8 space-y-6 text-white">
        <!-- Stars Rating -->
        <div class="flex gap-2">
            <svg 
                v-for="star in 5" 
                :key="star"
                :class="star <= rating ? 'text-GreenOne' : 'text-gray-400'"
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 24 24" 
                fill="currentColor"
            >
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
        </div>

        <!-- Testimony -->
        <p class="font-inter text-[15px] text-gray-400 leading-relaxed">
            "{{ testimony }}"
        </p>

        <!-- Client Name -->
        <h3 class="font-inter text-[15px] font-bold text-white">
            {{ clientName }}
        </h3>
    </div>
</template>

<script setup>
defineProps({
    clientName: {
        type: String,
        required: true
    },
    testimony: {
        type: String,
        required: true
    },
    rating: {
        type: Number,
        required: true,
        validator: (value) => value >= 1 && value <= 5
    }
})
</script>