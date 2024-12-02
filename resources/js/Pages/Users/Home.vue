<script setup>

// import Navbar from "@/Components/main/navbar/Navbar.vue"
import { History } from 'lucide-vue-next';
import MarketIcon from '@/Components/icons/Market.vue'
import StarIcon from '@/Components/icons/Star.vue'
import Button from "@/Components/ui/button/Button.vue"
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/Components/ui/tabs'
import Navbar from '@/Components/main/navbar/Navbar.vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>

    <Navbar />

    <section>
        <div class="mt-[30px] grid md:grid-cols-10 grid-cols-1 gap-5 items-start px-5 md:px-0">
            <div class="w-full md:col-span-8 md:col-start-2">
                <div class="lg:h-[290px] h-[200px] rounded-xl bg-blue-500 w-full"></div>
                <div class="mt-[20px]">
                    <div class="mb-10">
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
                    </div>
                    <div class="mb-3">
                        <div class="flex items-center gap-3">
                            <div class="w-[12px] h-[12px] bg-blue-500 rounded-full lg:block hidden"></div>
                            <h1 class="font-semibold text-3xl text-nowrap">Top Product</h1>
                            <div class="w-full h-[2px] bg-blue-500"></div>
                        </div>
                        <div class="grid lg:grid-cols-4 grid-cols-2 gap-x-3 gap-y-6 mt-5">
                            <Link href="/merchant/abc" class="border rounded-2xl hover:md:border-transparent hover:md:shadow-lg transition-[250ms]" v-for="i in 4">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                                    alt="food img" loading="lazy" class="w-full h-[130px] object-cover rounded-t-xl">
                                <div class="lg:p-4 p-2">
                                    <p class="text-[12px] font-light line-clamp-1">Elaina Store</p>
                                    <h1 class="font-medium text-slate-700 leading-4 lg:text-[16px] text-[14px] line-clamp-2 mt-1">Warung kedia pak cik mail keren</h1>
                                    <p class="text-[12px] mt-1 font-light line-clamp-1">Sate, Makanan, Minuman</p>
                                    <p class="lg:text-[15px] text-[13px] font-medium mt-1">Rp. 10.000</p>
                                    
                                    <p class="text-[11px] line-clamp-1 mt-1 flex items-center gap-1">
                                        <StarIcon /> 4.6 <span class="w-[2px] h-[2px] bg-slate-600 rounded-full"></span>
                                        Terjual 13
                                    </p>
                                </div>
                            </Link>
                        </div>
                    </div>


                    <div class="flex justify-center text-center flex-col mb-8 mt-16">
                        <div class="flex items-center gap-8">
                            <div class="w-full h-[1px] bg-blue-500 lg:block hidden"></div>
                                <h1 class="text-black font-medium text-[30px] lg:text-nowrap text-wrap leading-[1.2]">Looking for some foods? Find here</h1>
                            <div class="w-full h-[1px] bg-blue-500 lg:block hidden"></div>
                        </div>
                        <p class="lg:text-sm text-xs mt-2"> Temukan berbagai hidangan warga siber. <br>Jelajahi cita rasa khas yang dibuat dengan bahan pilihan anak siber.</p>
                  
                    </div>
                    <div class="grid lg:grid-cols-4 grid-cols-2 gap-x-5 gap-y-6 mb-10">
                        <Link href="/merchant/abc" class="border rounded-2xl hover:md:border-transparent hover:md:shadow-lg transition-[250ms]" v-for="i in 8">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                                alt="food img" loading="lazy" class="w-full h-[130px] object-cover rounded-t-xl">
                            <div class="lg:p-4 p-2">
                                <p class="text-[12px] font-light line-clamp-1">Elaina Store</p>
                                <h1 class="font-medium text-slate-700 leading-4 lg:text-[16px] text-[14px] line-clamp-2 mt-1">Warung kedia pak cik mail keren</h1>
                                <p class="text-[12px] mt-1 font-light line-clamp-1">Sate, Makanan, Minuman</p>
                                <p class="lg:text-[15px] text-[13px] font-medium mt-1">Rp. 10.000</p>
                                
                                <p class="text-[11px] line-clamp-1 mt-1 flex items-center gap-1">
                                    <StarIcon /> 4.6 <span class="w-[2px] h-[2px] bg-slate-600 rounded-full"></span>
                                    Terjual 13
                                </p>
                            </div>
                        </Link>
                    </div>
                    <div class="mb-6 flex justify-center">
                        <button class="bg-orange-100 text-orange-600 text-sm px-6 py-2 rounded-full font-medium hover:bg-orange-200">Load More</button>
                    </div>
                </div>


            </div>
        </div>


        <footer>
            <div class="w-full bg-blue-50 h-[130px] mt-16">
        
                <hr>
                <div class="flex justify-center px-10 py-6">
                    <img src="https://i.ibb.co.com/2jsxLq0/New-Project-58-Copy-4-EF890-A-1.png" alt="logo full" width="140px">

                </div>
                <div class="text-center">
                    <p class="text-sm text-slate-500">&copy; 2024 Titip Siber. All rights reserved</p>
                </div>
            </div>
        </footer>

    </section>

</template>