<template>
    <div
      class="inset-0 flex items-center justify-center p-4 md:p-10"
      style="z-index: 9999;"
    >
      <div
        class="w-[841px] h-[505.86px] 
              bg-white 
              rounded-[50px] shadow-lg 
              p-6 md:px-[178px] md:py-[70px]
              flex flex-col items-center justify-center
              gap-[66px]
              relative
              max-w-[95vw]"
      >
        <div class="w-[58.43px] h-[54.86px] flex-none">
          <Logo />
        </div>
              
        <div class="w-[182px] h-[39px] flex items-center justify-center flex-none">
          <H2Custom class="font-inter font-bold text-[32px] leading-[39px] text-center text-black">
            SUBSCRIBE
          </H2Custom>
        </div>
        
        <div class="w-full max-w-[485px] flex flex-col gap-[15px] flex-none">
          <InputText
            placeholder="Enter your email"
            v-model="inputValue"
            class="font-inter text-[15px] font-medium leading-[18px] text-[#B5B5B5]"
            id="unique-id"
            :required="true"
          />
        </div>
  
        <div class="flex-none">
          <GreenButton class="w-[205px] h-[39px]" @click="submit">
            Subscribe
          </GreenButton>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
import { useForm } from '@inertiajs/vue3'
import {ref} from 'vue'
import Logo from "./Logo.vue"
import H2Custom from "./H2Custom.vue"
import InputText from "../Forms/InputText.vue"
import GreenButton from "./GreenButton.vue"

const form = useForm({
    email: ''
})
const inputValue = ref('');
form.data.email = inputValue.value;
const submit = () => {
  console.log(inputValue.value);
    /*form.post(route('subscribe'), {
        onSuccess: () => {
            form.reset()
        },
    })*/ 
}
</script>