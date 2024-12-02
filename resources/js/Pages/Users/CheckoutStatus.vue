<script setup>
import Navbar from '@/Components/main/navbar/Navbar.vue';
import { Button } from '@/Components/ui/button';
import { Check, ScrollText } from 'lucide-vue-next';


</script>


<template>
    <Navbar />

    <div class="grid grid-cols-12 mb-5">
        <div class="md:col-span-4 md:col-start-5  col-span-12 px-5 md:px-0">


            <div class="w-full p-8 border mt-8 rounded-2xl flex flex-col justify-center">
                <div class="flex items-center justify-center space-x-4">
                    <div class="p-5 bg-green-500 bg-opacity-15 rounded-full">
                        <Check class="text-green-500" size="42" />
                    </div>
                </div>


                <div class="mt-5 text-center">
                    <h4 class="text-2xl font-semibold">Rp 50.000</h4>
                    <h6 class="font-medium mt-3">Warung Mantap</h6>
                    <p class="mt-3 text-slate-500 ">Pembayaran Berhasil</p>
                </div>

                <hr class="my-8">

                <div class="flex items-center space-x-4">
                    <h1 class="font-semibold">Rincian</h1>
                </div>
                <div class="grid grid-cols-4 justify-between mt-8 gap-y-4">
                    <div class="col-span-2 flex flex-col">
                        <p class="mt-1 font-normal line-clamp-1">Status</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-end items-end  ">
                        <p class="mt-1 font-semibold line-clamp-1">Selesai</p>
                    </div>

                    <div class="col-span-2 flex flex-col">
                        <p class="mt-1 font-normal line-clamp-1">Metode Pembayaran</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-end items-end  ">
                        <p class="mt-1 font-semibold line-clamp-1">GoPay</p>
                    </div>

                    <div class="col-span-2 flex flex-col">
                        <p class="mt-1 font-normal line-clamp-1">Waktu</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-end items-end  ">
                        <p class="mt-1 font-semibold line-clamp-1">09:55</p>
                    </div>

                    <div class="col-span-2 flex flex-col">
                        <p class="mt-1 font-normal line-clamp-1">Tanggal</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-end items-end  ">
                        <p class="mt-1 font-semibold line-clamp-1">28 Okt 2024</p>
                    </div>

                </div>
                <hr class="my-4">

                <div class="grid grid-cols-4 justify-between gap-y-4">
                    <div class="col-span-2 flex flex-col">
                        <p class="mt-1 font-normal line-clamp-1">Total</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-end items-end  ">
                        <p class="mt-1 font-semibold line-clamp-1">Rp. 50.000</p>
                    </div>
                </div>

            </div>

            <!-- <div class="w-full p-8 border mt-8 rounded-2xl">
                <div class="flex items-center space-x-4">
                    <h1 class="text-lg font-semibold">Pembayaran</h1>
                </div>
                <div class="grid grid-cols-4 justify-between mt-8 gap-y-4">
                    <div class="col-span-2 flex flex-col">
                        <p class="text-base mt-1 font-normal line-clamp-1">Total Pembayaran</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-end items-end  ">
                        <p class="text-base mt-1 font-semibold line-clamp-1">Rp. 50.000</p>
                    </div>
                </div>
                <hr class="my-4">
                <h4>Metode Pembayaran</h4>

            </div> -->

            
            <Button class="w-full rounded-2xl py-5 font-medium mt-4" @click="submit">Kembali ke Halaman Utama</Button>
        </div>
    </div>
</template>



<style lang="scss" scoped></style>