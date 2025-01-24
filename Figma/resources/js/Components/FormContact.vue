<template>
    <form @submit.prevent="handleSubmit" class="w-full max-w-[841px] mx-auto space-y-[66px] p-[70px]">
        <!-- Name and LastName Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <InputText
                v-model="formData.name"
                placeholder="First Name"
                :required="true"
            />
            <InputText
                v-model="formData.lastName"
                placeholder="Last Name"
                :required="true"
            />
        </div>

        <!-- Phone and Email Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <InputText
                v-model="formData.phone"
                placeholder="Phone Number"
                :required="true"
            />
            <InputText
                v-model="formData.email"
                placeholder="Email Address"
                type="email"
                :required="true"
            />
        </div>

        <!-- Message Textarea -->
        <div class="w-full">
            <textarea
                v-model="formData.message"
                placeholder="Your Message"
                rows="4"
                required
                class="w-full px-4 py-2
                       border-0 border-b-2 border-gray-300
                       font-inter text-sm
                       focus:ring-2 focus:ring-white focus:border-none
                       transition-all duration-200
                       text-black
                       resize-none"
            ></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <GreenButton type="submit">
                Send Message
            </GreenButton>
        </div>
    </form>
</template>

<script setup>
import { ref } from 'vue'
import InputText from './Forms/InputText.vue'
import GreenButton from './ComponentesTest/GreenButton.vue'

const formData = ref({
    name: '',
    lastName: '',
    phone: '',
    email: '',
    message: ''
})

const handleSubmit = () => {
    // Handle form submission
    console.log('Form submitted:', formData.value)
}
</script>

<style scoped>
textarea:focus {
    outline: none;
}

textarea::placeholder {
    color: #B5B5B5;
}
</style>