<template>
    <div class="min-h-screen w-full flex items-center justify-center p-4">
        <div class="w-full max-w-[841px] bg-white 
                    p-6 sm:p-8 md:p-[70px]
                    flex flex-col items-center 
                    gap-8 sm:gap-12 md:gap-[66px]
                    rounded-[25px] sm:rounded-[35px] md:rounded-[50px]
                    shadow-lg">
            <div class="w-full max-w-[150px] sm:max-w-[200px] md:max-w-[250px]">
                <LogoAvion color="fill-GreenOne" />
            </div>
            
            <h2 class="w-full">
                <H2Custom>SUSCRIBE</H2Custom>
            </h2>
            
            <div class="w-full max-w-[485px] mx-auto">
                <InputText
                        placeholder="Enter your email"
                        v-model="inputValue"
                        label="Your Label"
                        id="unique-id"
                        :required="true"
                    />
            </div>
            
            <div class="w-full flex justify-center">
                <GreenButton>
                            Subscribe
                        </GreenButton>
            </div>
        </div>
    </div>
</template>

<script setup>
import GreenButton from '@/Components/ComponentesTest/GreenButton.vue';
import InputText from '@/Components/Forms/InputText.vue';
import LogoAvion from '@/Components/LogoAvion.vue';
import H2Custom from '@/Components/Texts/H2Custom.vue';
</script>

<style scoped>

.container-wrapper {
    @apply flex justify-center items-center;
}

.fixed-container {
    @apply bg-white 
                 rounded-[50px] 
                 w-[841px]
                 min-h-[505.86px]
                 px-[178px]
                 py-[70px]
                 gap-[66px]
                 mx-auto
                 shadow-lg
                 
                 /* Responsive styles */
                 max-w-[95%]
                 sm:w-[95%]
                 sm:px-6
                 sm:py-8
                 sm:rounded-[25px]
                 
                 md:w-[90%]
                 md:px-12
                 md:py-12
                 md:rounded-[35px]
                 
                 lg:w-[841px]
                 lg:px-[178px]
                 lg:py-[70px]
                 lg:rounded-[50px];
}
</style>