<template>
    <CustomAppLayout>
        <!-- Hero Section -->
        <HeroSection />

        <!-- Features Section -->
        <FeaturesSection />

        <!-- Subscribe Section -->
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <ModalCustom />
            </div>
        </section>
    </CustomAppLayout>
</template>

<script setup>
import CustomAppLayout from '@/Layouts/CustomAppLayout.vue'
import ModalCustom from '@/Components/ComponentesTest/ModalCustom.vue';
import HeroSection from '@/Components/HeroSection.vue';
import FeaturesSection from '@/Components/FeatureSection.vue';
defineProps({
    canLogin: {
        type: Boolean,
    },
});

</script>