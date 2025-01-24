<template>
    <div class="w-full">
        <input
            :id="id"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            :disabled="disabled"
            :required="required"
            :placeholder="placeholder"
            :type="type"
            class="w-full 
                h-[35px]
                px-4
                border-0 
                border-b-[2px] 
                border-gray-300                   
                font-inter 
                text-sm
                placeholder:text-[#B5B5B5]
                focus:outline-none 
                focus:ring-0 
                focus:border-GreenOne
                transition-all 
                duration-200
                text-black"
            v-bind="$attrs"
        >
    </div>
</template>

<script setup>
defineProps({
    modelValue: {
        type: String,
        default: ''
    },
    placeholder: {
        type: String,
        default: ''
    },
    type: {
        type: String,
        default: 'text'
    },
    label: {
        type: String,
        default: ''
    },
    id: {
        type: String,
        default: ''
    },
    disabled: {
        type: Boolean,
        default: false
    },
    required: {
        type: Boolean,
        default: false
    }
})

defineEmits(['update:modelValue'])
</script>