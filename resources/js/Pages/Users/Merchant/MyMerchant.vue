<script setup>
import Navbar from '@/Components/main/navbar/Navbar.vue';
import { Link } from '@inertiajs/vue3';
import StarIcon from '@/Components/icons/Star.vue'
import { Pen } from 'lucide-vue-next';

const props = defineProps({
  merchant: {
    type: Object,
    required: false, 
  },
});


</script>


<template>
    <Navbar />
    <div v-if="props.merchant" class="">
        <div class="mt-[30px] grid md:grid-cols-10 grid-cols-1 gap-5 items-start px-5 md:px-0">
            <div class="w-full md:col-span-8 md:col-start-2">
                <div class="grid lg:grid-cols-[3fr,9fr] md:grid-cols-2 gap-5 my-10">
                    <div class="w-full  rounded-lg">
                        <div class="p-4">
                            <div class="flex justify-center relative">
                                <img src="https://images.tokopedia.net/img/cache/300/tPxBYm/2023/1/20/785ac6cb-d67b-42bd-97f8-6a06b9269130.jpg" alt="avatar"  class="rounded-full lg:w-full w-[70%]">
                                <button class="absolute lg:bottom-[15px] bottom-[10px] lg:right-[10px] right-[70px] bg-orange-500 text-white p-3 rounded-full"><Pen class="size-4"/></button>
                            </div>
                            <div class="text-center mb-3">
                                <h1 v-html="props.merchant.name" class="text-xl mt-3 font-semibold text-slate-700"></h1>
                                <p v-html="props.merchant.location" class="text-slate-500 text-sm mt-1"></p>
                            </div>
                            <div class="flex justify-center mt-3">
                                <div v-if="props.merchant.status == 1" class="bg-blue-50 text-blue-600 px-5 py-2 rounded-full text-sm">Tersedia</div>
                                <div v-else class="bg-orange-50 text-orange-600 px-5 py-2 rounded-full text-sm">Tutup</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full ">
                        <div class="">
                            <div class="flex items-center gap-3">
                                <div class="w-[12px] h-[12px] bg-blue-500 rounded-full lg:block hidden flex-shrink-0"></div>
                                    <h1 class="font-semibold text-3xl text-nowrap">Items Kamu</h1>
                                <div class="w-full h-[2px] bg-blue-500"></div>
                            </div>
                        </div>
                        <!-- <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-x-5 gap-x-3 gap-y-6 mt-8">
                            <Link href="/merchant/abc" class="border rounded-2xl hover:md:border-transparent hover:md:shadow-lg transition-[250ms]" v-for="i in 4">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                                    alt="food img" loading="lazy" class="w-full h-[130px] object-cover rounded-t-xl">
                                <div class="lg:p-4 p-2">
                                    <p class="text-[12px] font-light line-clamp-1">Elaina Store</p>
                                    <h1 class="font-medium text-slate-700 leading-5 lg:text-[16px] text-[14px] line-clamp-2 mt-1">Warung kedia pak cik mail keren</h1>
                                    <p class="text-[12px] mt-1 font-light line-clamp-1">Sate, Makanan, Minuman</p>
                                    <p class="lg:text-[15px] text-[13px] font-medium mt-1">Rp. 10.000</p>
                                    
                                    <p class="text-[11px] line-clamp-1 mt-1 flex items-center gap-1">
                                        <StarIcon />
                                        Terjual 13
                                    </p>
                                </div>
                            </Link>
                        </div> -->

                        <div class="mt-20 text-center">
                            <div class="flex justify-center">
                                <img src="https://i.gojekapi.com/darkroom/gofood-id/v2/images/uploads/80cb711b-d5c1-4c1e-a1a2-92069eb0a859_why-gofood-order.png?auto=format" alt="image nothing" width="220px">
                            </div>
                            <h1 class="text-slate-600 font-semibold mt-5">Belum ada item apapun nih ..</h1>
                            <div class="flex justify-center mt-5">
                                <Link :href="route('my-merchant')" class="border text-sm rounded-lg px-5 py-2 border-blue-500 text-blue-600 hover:bg-blue-500 hover:text-white">Tambah Item</Link>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <div v-else class="flex justify-center mt-20">
        <div class="text-center">
            <div class="flex justify-center">
                <img src="https://i.gojekapi.com/darkroom/gofood-id/v2/images/uploads/6bf66475-00fc-4a41-92f3-65fc37e5eddd_why-gofood-deals.png?auto=format" alt="image" class="w-[390px]">
            </div>
            <h1 class="text-2xl text-slate-700 font-semibold mt-5">Sepertinya kamu belum pernah mendaftar</h1>
            <div class="flex justify-center mt-5">
                <Link :href="route('my-merchant.register')" class="border rounded-lg px-5 py-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white">Daftar Merchant</Link>
            </div>
        </div>
    </div>
</template>