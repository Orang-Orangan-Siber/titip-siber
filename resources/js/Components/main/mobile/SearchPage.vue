<script setup>
    import { X } from 'lucide-vue-next';

    import { ref, defineEmits } from 'vue';

    const props = defineProps({
                    isVisible: {
                        type: Boolean,
                        default: false, 
                    },
                });


    const emit = defineEmits(["update:isVisible"]);

    const closeMenu = () => {
        emit("update:isVisible", false); 
    };

</script>


<template>
    <div :class="['lg:hidden block bg-slate-50 w-full h-[100vh] z-[101] fixed top-0 left-0 bottom-0 right-0 duration-500', isVisible ? 'translate-x-0' : 'translate-x-[105%]']">
        <div class="">
            <form action="/search" class="header">
                <input type="text" name="" id="" placeholder="Lagi mau nyari apa nih ..." class="w-full bg-white border-0 focus:outline-none p-4 shadow text-slate-800 text-sm">
            </form>
        </div>
        <button @click="closeMenu" class="bg-orange-500 w-[50px] h-[50px] fixed bottom-[40px] right-[40px] rounded-full flex justify-center items-center">
            <X class="text-white" />
        </button>
    </div>
</template>