<script setup>

// import Navbar from "@/Components/main/navbar/Navbar.vue"
import { History } from 'lucide-vue-next';
import MarketIcon from '@/Components/icons/Market.vue'
import StarIcon from '@/Components/icons/Star.vue'
import Button from "@/Components/ui/button/Button.vue"
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/Components/ui/tabs'
import Navbar from '@/Components/main/navbar/Navbar.vue';

</script>

<template>

    <Navbar />

    <section>
        <div class="mt-[30px] grid md:grid-cols-10 grid-cols-1 gap-5 items-start px-5 md:px-0">
            <div class="w-full md:col-span-8 md:col-start-2">
                <div class=" h-[220px] rounded-xl bg-blue-500 w-full"></div>
                <div class="mt-[20px]">
                    <h1 class="font-semibold">Kategori Pilihan</h1>
                    <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 items-center mt-2 gap-3">
                        <a href="" class="text-center">
                            <div class="border w-full h-[90px] rounded-lg flex items-center justify-center">
                                <img src="https://www.static-src.com/siva/asset/11_2023/new-all-promo_4x.png?w=110"
                                    alt="category img" width="45px">
                            </div>
                            <p class="text-xs tracking-wide mt-2">Makanan</p>
                        </a>
                        <a href="" class="text-center">
                            <div class="border w-full h-[90px] rounded-lg flex items-center justify-center">
                                <img src="https://www.static-src.com/siva/asset/10_2023/Widget-Belanja-ibuAnak.png?w=110"
                                    alt="category img" width="45px">
                            </div>
                            <p class="text-xs tracking-wide mt-2">Minuman</p>
                        </a>
                        <a href="" class="text-center">
                            <div class="border w-full h-[90px] rounded-lg flex items-center justify-center">
                                <img src="https://www.static-src.com/siva/asset/10_2023/Widget-Layanan-tradein.png?w=110"
                                    alt="category img" width="45px">
                            </div>
                            <p class="text-xs tracking-wide mt-2">Alat Tulis</p>
                        </a>

                    </div>
                    <div class="grid lg:grid-cols-4 grid-cols-2 mt-10 gap-x-3 gap-y-6">
                        <a href="" class="border p-3 rounded-2xl hover:md:border-transparent hover:md:shadow-lg transition-[250ms]" v-for="i in 9">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                                alt="food img" loading="lazy" class="w-full h-[228px] object-cover rounded-xl">
                            <div class="mt-1 p-2">
                                <h1 class="font-semibold text-base leading-5 line-clamp-2 mt-2">Warung Mantap</h1>
                                <p class="text-sm mt-3 font-light line-clamp-1">Sate, Makanan, Minuman</p>
                                <p class="text-[15px] font-medium mt-4">Rp. 10.000 - Rp. 15.000</p>
                                <!-- <p class="text-[11px] line-clamp-1 mt-1 flex items-center gap-1">
                                    <StarIcon /> 4.6 <span class="w-[2px] h-[2px] bg-slate-600 rounded-full"></span>
                                    Terjual 13
                                </p> -->
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>

    </section>

</template>