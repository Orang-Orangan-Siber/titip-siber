<script setup>

// import Navbar from "@/Components/main/navbar/Navbar.vue"
import { History } from 'lucide-vue-next';
import MarketIcon from '@/Components/icons/Market.vue'
import StarIcon from '@/Components/icons/Star.vue'

import Sidebar from "@/Components/main/sidebar/Sidebar.vue"
import Button from "@/Components/ui/button/Button.vue"
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/Components/ui/tabs'

</script>

<template>

<Sidebar> 
    <section>
        <div class="mt-[30px] grid lg:grid-cols-[8fr,4fr] grid-cols-1 gap-5 ">
            <div class="w-full">
                <div class=" h-[220px] rounded-xl bg-blue-500 w-full"></div>
                <div class="mt-[20px]">
                    <h1 class="font-semibold">Kategori Pilihan</h1>
                    <div class="flex items-center mt-2 gap-3">
                        <a href="" class="text-center">
                            <div class="border w-[90px] h-[90px] rounded-lg flex items-center justify-center">
                                <img src="https://www.static-src.com/siva/asset/11_2023/new-all-promo_4x.png?w=110" alt="category img" width="45px">
                            </div>
                            <p class="text-xs tracking-wide mt-2">Makanan</p>
                        </a>
                        <a href="" class="text-center">
                            <div class="border w-[90px] h-[90px] rounded-lg flex items-center justify-center">
                                <img src="https://www.static-src.com/siva/asset/10_2023/Widget-Belanja-ibuAnak.png?w=110" alt="category img" width="45px">
                            </div>
                            <p class="text-xs tracking-wide mt-2">Minuman</p>
                        </a>
                        <a href="" class="text-center">
                            <div class="border w-[90px] h-[90px] rounded-lg flex items-center justify-center">
                                <img src="https://www.static-src.com/siva/asset/10_2023/Widget-Layanan-tradein.png?w=110" alt="category img" width="45px">
                            </div>
                            <p class="text-xs tracking-wide mt-2">Jasa Titip</p>
                        </a>

                    </div>
                    <div class="grid lg:grid-cols-3 grid-cols-2 mt-10 gap-x-3 gap-y-6">
                        <a href="" class="border border-transparent hover:border-slate-300 rounded-lg" v-for="i in 9">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s" alt="food img" loading="lazy" class="w-full h-[140px] object-cover rounded-t-md">
                            <div class="mt-1 p-2">
                                <p class="text-xs font-normal line-clamp-1 text-slate-600 mb-[3px]">
                                    Elaina Cantik
                                </p>
                                <h1 class="font-semibold text-[15px] leading-5 line-clamp-2 mb-1">Sate Padang Enak Mantap panjang dan sedap banget cuuuuyy</h1>
                                <p class="text-[11px] line-clamp-1">Lorem ipsum dolor sit amet cons awdaw dawdawdectetur adipisicing elit. Harum unde placeat qui.</p>
                                <p class="text-[15px] font-medium mt-2">Rp. 140.000</p>
                                <p class="text-[11px] line-clamp-1 mt-1 flex items-center gap-1"><StarIcon/> 4.6 <span class="w-[2px] h-[2px] bg-slate-600 rounded-full"></span> Terjual 13</p>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
            <div class="w-full border-l ps-5 sticky h-[560px] top-[10px] lg:block hidden">
                <h1 class="font-semibold flex items-center gap-2"><History class="size-5" /> Order Detail</h1>
                <Tabs default-value="account" class="w-full mt-3">
                    <TabsList class="w-full">
                        <TabsTrigger value="account" class="w-full">
                            Your Order
                        </TabsTrigger>
                        <TabsTrigger value="password" class="w-full">
                            Unavailable
                        </TabsTrigger>
                    </TabsList>

                    <TabsContent value="account" class="max-h-[300px] overflow-auto">   

                        <div class="my-2 border rounded-2xl p-3 bg-white " v-for="i in 6">
                            <p class="text-xs font-medium flex items-center w-max gap-1 text-slate-600 hover:underline">
                                iShowSheep Store</p>
                            <div class="flex mt-2 gap-3">
                                <img src="https://lingkarwilis.com/wp-content/uploads/2024/03/2024-03-14-15_17_52-Window.png" alt="food img" loading="lazy" class="w-[60px] h-[60px] object-cover rounded-lg">
                                <div class="">
                                    <a href="" class="block hover:underline text-xs font-semibold">1 Ayam geprek pedas</a>
                                    <p class="text-[10px] mt-1">15 Jan 2024</p>
                                    <p class="text-xs mt-1 text-orange-600 font-semibold">Rp. 14.000</p>
                                </div>
                            </div>
                        </div>
            

                    </TabsContent>
                    <TabsContent value="password" class="max-h-[300px] overflow-auto">
                        <div class="my-2 border rounded-2xl p-3 bg-white " v-for="i in 2">
                            <p class="text-xs font-medium flex items-center w-max gap-1 text-slate-600 hover:underline">
                                iShowSheep Store</p>
                            <div class="flex mt-2 gap-3">
                                <img src="https://lingkarwilis.com/wp-content/uploads/2024/03/2024-03-14-15_17_52-Window.png" alt="food img" loading="lazy" class="w-[60px] h-[60px] object-cover rounded-lg">
                                <div class="">
                                    <a href="" class="block hover:underline text-xs font-semibold">1 Ayam geprek pedas</a>
                                    <p class="text-[10px] mt-1">15 Jan 2024</p>
                                    <p class="text-xs mt-1 text-orange-600 font-semibold">Rp. 14.000</p>
                                </div>
                            </div>
                        </div>
                    </TabsContent>

                    <div class="my-2 border rounded-2xl px-3 py-2">
                        <div class="flex justify-between my-2">
                            <p class="text-xs text-slate-500">Item</p>
                            <p class="text-xs font-semibold">Rp. 300.000</p>
                        </div>
                        <div class="flex justify-between my-2">
                            <p class="text-xs text-slate-500">Item</p>
                            <p class="text-xs font-semibold">Rp. 300.000</p>
                        </div>
                        <hr class="my-5">
                        <div class="flex justify-between my-2">
                            <p class="text-xs text-slate-500">Total</p>
                            <p class="text-xs font-semibold">Rp. 300.000</p>
                        </div>
                    </div>

                    <Button class="rounded-full w-full py-5 mt-2">Pesan Sekarang</Button>
                </Tabs>
            </div>
        </div>
    
    </section>
    <!-- <div class="w-full h-[20px] bg-slate-600"></div> -->
</Sidebar>

</template>