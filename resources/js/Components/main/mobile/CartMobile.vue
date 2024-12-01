<script setup>

import { ArrowLeft } from 'lucide-vue-next';
import MarketIcon from '@/Components/icons/Market.vue'


</script>


<template>
    <div class="lg:hidden block">
        <div class="bg-slate-50 w-full h-[100vh] z-[101] fixed top-0 left-0 bottom-0 right-0">
            <div class="">
                <div class="header bg-white w-full h-[60px] shadow">
                    <div class="flex items-center h-full mx-4">
                        <div class="flex gap-3">
                            <button><ArrowLeft class="text-slate-400" /></button>
                            <p class="text-slate-500 font-medium">Keranjang</p>
                        </div>
                    </div>
                </div>

                <div class="body">
                    <div class="item my-3 bg-white px-5 py-4">
                        <div class="mb-2 flex items-center gap-2">
                            <MarketIcon/>
                            <a href="" class="text-[13px] font-semibold">Elaine Store ></a>
                        </div>
                        <div class="flex gap-3">
                            <img src="https://lingkarwilis.com/wp-content/uploads/2024/03/2024-03-14-15_17_52-Window.png" alt="food img" loading="lazy" class="w-[90px] h-[90px] object-cover rounded-lg">
                            <a href="" class="line-clamp-1 text-[13px]">Iphone 15 sangat terbaru dan sangat mantap banget kamu cihuuuuy </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>