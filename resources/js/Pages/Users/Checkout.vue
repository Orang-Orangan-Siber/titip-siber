<script setup>
import Navbar from '@/Components/main/navbar/Navbar.vue';
import { ArrowLeft, ClipboardList } from 'lucide-vue-next';


</script>

<template>
    <Navbar />


    <div class="grid grid-cols-12 mb-5">
        <div class="col-span-6 col-start-4 ">
            <div class="flex items-center mt-10 space-x-4">
                <button class="w-[42px] h-[42px] bg-blue-500 rounded-full flex items-center justify-center text-white">
                    <ArrowLeft />
                </button>
                <h1 class="text-2xl font-semibold">Warung Mantap</h1>
            </div>


            <div class="w-full p-8 border mt-8 rounded-2xl">
                <div class="flex items-center space-x-4">
                    <ClipboardList class="text-orange-500" size="32"/>
                    <h1 class="text-xl font-semibold">Pembelianmu</h1>
                </div>
            </div>
        </div>
    </div>
</template>



<style lang="scss" scoped></style>