<script setup>


import Navbar from '@/Components/main/navbar/Navbar.vue';
import StarIcon from '@/Components/icons/Star.vue'
import { Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import Footer from '@/Components/main/footer/Footer.vue';




const query = ref("")
onMounted(() => {
  const params = new URLSearchParams(window.location.search);
  query.value = params.get("q") || "";
});

</script>


<template>
    <Navbar />

    <div class="mt-[30px] grid md:grid-cols-10 grid-cols-1 gap-5 items-start px-5 md:px-0">
        <div class="w-full md:col-span-8 md:col-start-2">
            <div class="">
                <div class="flex items-center gap-3">
                    <div class="w-[12px] h-[12px] bg-blue-500 rounded-full lg:block hidden"></div>
                    <h1 class="font-semibold text-3xl text-nowrap text-blue-500">Hasil pencarian</h1>
                    <div class="w-full h-[2px] bg-blue-500"></div>
                </div>

                <div class="my-6">
                    <div class="grid lg:grid-cols-4 grid-cols-2 gap-x-3 gap-y-6 mt-5">
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
                    </div>
                </div>

                <!-- ELSE  -->
                <!-- <div class="text-center mt-36">
                    <h1 class="text-3xl text-slate-800 font-semibold">Hmm, couldn't find <span v-html="query"></span></h1>
                    <p class="text-sm mt-2">Tidak bisa menemukan data tersebut</p>
                </div> -->
            </div>
        </div>
    </div>

</template>