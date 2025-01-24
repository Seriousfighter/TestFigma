<template>
    <footer class="bg-white shadow-lg mt-auto border-t-[1px] border-gray-200">
        <div class="max-w-[841px] mx-auto px-4 sm:px-6 lg:px-[178px] py-[70px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[66px]">
                <div>
                    <h2 class="font-inter font-bold text-[32px] leading-[39px]">LOGO</h2>
                    <p class="mt-4 font-inter text-[15px] text-gray-600">
                        © 2025 Subscribe Form. All Rigths Reserved. Design by EquipoDotGuru.
                    </p>
                </div>

                <div>
                    <h3 class="font-inter font-bold text-[15px] mb-4">Quick Links</h3>
                    <ul class="space-y-4">
                        <li v-for="(link, index) in footerLinks" 
                            :key="index">
                            <a :href="link.href" 
                            class="font-inter text-[15px] text-gray-600 hover:text-GreenOne transition-all">
                                {{ link.name }}
                            </a>
                            
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-inter font-bold text-[15px] mb-4">Contact</h3>
                    <address class="not-italic font-inter text-[15px] text-gray-600">
                        <p>Email: contact@example.com</p>
                        <p>Phone: (123) 456-7890</p>
                    </address>
                </div>
            </div>
        </div>
    </footer>
</template>
<script setup>

defineProps({
    footerLinks: {
        type: Array,
        required: true,
    },
});
</script>