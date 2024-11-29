<script setup>

// import Navbar from "@/Components/main/navbar/Navbar.vue"
import { History } from 'lucide-vue-next';
import MarketIcon from '@/Components/icons/Market.vue'

import Sidebar from "@/Components/main/sidebar/Sidebar.vue"
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/Components/ui/tabs'

</script>

<template>

<Sidebar> 
    <section>
        <div class="mt-[40px] grid grid-cols-[8fr,4fr] gap-5 ">
            <div class="w-full">
                <div class=" h-[220px] rounded-xl bg-blue-500 w-full"></div>
                <div class="mt-[20px]">
                    <h1 class="font-semibold">Kategori Pilihan</h1>
                    <div class="flex items-center mt-2 gap-3">
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                        <div class="bg-blue-500 w-[90px] h-[90px] rounded-lg"></div>
                    </div>
                    <div class="grid grid-cols-3 mt-10 gap-3">
                        <a href="" class="" v-for="i in 10">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s" alt="food img" loading="lazy" class="w-full h-[140px] object-cover rounded-md">
                            <div class="mt-2">
                                <h1 class="font-bold text-[15px] leading-5 line-clamp-2 mb-2">Sate Padang Enak Mantap panjang dan sedap banget cuuuuyy</h1>
                                <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum unde placeat qui.</p>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
            <div class="w-full border-l ps-5 sticky h-[560px] top-[10px]">
                <h1 class="font-semibold flex items-center gap-2"><History class="size-5" /> Order Detail</h1>
                <Tabs default-value="account" class="w-full mt-3">
                    <TabsList class="w-full">
                        <TabsTrigger value="account" class="w-full">
                            Your Order
                        </TabsTrigger>
                        <TabsTrigger value="password" class="w-full">
                            History
                        </TabsTrigger>
                    </TabsList>

                    <TabsContent value="account" class="h-[330px] overflow-auto">   

                        <div class="my-2 border rounded-2xl p-3 bg-white " v-for="i in 6">
                            <p class="text-xs font-medium flex items-center w-max gap-1 text-slate-600 hover:underline">
                                <MarketIcon/>
                                iShowSheep Store</p>
                            <div class="flex mt-2 gap-3">
                                <img src="https://lingkarwilis.com/wp-content/uploads/2024/03/2024-03-14-15_17_52-Window.png" alt="food img" loading="lazy" class="w-[60px] h-[60px] object-cover rounded-lg">
                                <div class="">
                                    <a href="" class="block hover:underline text-xs font-semibold">1 Ayam geprek pedas</a>
                                    <p class="text-[10px] mt-1">15 Jan 2024</p>
                                    <p class="text-xs mt-1 text-blue-500 font-semibold">Rp. 14.000</p>
                                </div>
                            </div>
                        </div>
            

                    </TabsContent>
                    <TabsContent value="password">
                        Change your password here.
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

                </Tabs>
            </div>
        </div>
    
    </section>
    <!-- <div class="w-full h-[20px] bg-slate-600"></div> -->
</Sidebar>

</template>