<template>
    <button
        class="relative
            w-[150px] sm:w-[180px] md:w-[205px] 
            h-[35px] sm:h-[37px] md:h-[39px] 
            px-4 sm:px-8 md:px-[74px] 
            py-2 sm:py-3 md:py-[14px] 
            bg-GreenOne
            rounded-full 
            flex items-center justify-center 
            gap-2 sm:gap-[10px] 
            font-inter 
            text-sm sm:text-[14px] md:text-[15px] 
            font-bold 
            leading-tight md:leading-[18.15px] 
            text-black text-center 
            shine-effect
            active:translate-y-[2px]
            active:shadow-inner
            transition-all duration-200"
    >
        <slot></slot>
    </button>
</template>

<style scoped>
.shine-effect {
    background: linear-gradient(
        110deg,
        #E6FC15 0%,
        #E6FC15 50%,
        #eafd3d 51%,
        #E6FC15 100%
    );
    background-size: 200% 100%;
    animation: shine 3s infinite;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

@keyframes shine {
    to {
        background-position: 200% center;
    }
}

button:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
</style>