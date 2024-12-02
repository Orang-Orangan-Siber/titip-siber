<script setup>
import Navbar from '@/Components/main/navbar/Navbar.vue';
import Button from '@/Components/ui/button/Button.vue';
import { useForm } from "@inertiajs/vue3";


const form = useForm({
    name: "",
    location: "",
    no_telp: "",
});

const submit = () => {
    form.post(route("my-merchant.register.post"), {
        onFinish: () => form.reset("password")
    });
}


</script>




<template>
    <Navbar />

    <div class="">

        <div class="flex justify-center my-10">
            <div class="card w-[500px] h-[520px]  ">
                <div class="p-5">
                    <div class="">
                        <h1 class="text-center mb-2 text-2xl font-medium text-blue-700">Registrasi</h1>
                        <div class="flex items-center gap-3">
                            <div class="w-[12px] h-[12px] bg-blue-500 rounded-full flex-shrink-0"></div>
                            <h1 class="font-semibold text-3xl text-nowrap"></h1>
                            <div class="w-full h-[2px] bg-blue-500"></div>
                        </div>
                    </div>
                    <form @submit.prevent="submit" class="mt-5">
                        <div class="mb-5">
                            <label for="merhcant_name" class="text-sm">Nama Merchant</label>
                            <input required type="text" name="" v-model="form.name" id="merhcant_name" class="mt-1 text-sm focus:ring-1 focus:ring-blue-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-blue-400 rounded-lg p-3" placeholder="Example : John Store" >
                        </div>
                        <div class="mb-5">
                            <label for="take_location" class="text-sm">Lokasi pengambilan</label>
                            <input required type="text" name="" v-model="form.location" id="take_location" class="mt-1 text-sm focus:ring-1 focus:ring-blue-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-blue-400 rounded-lg p-3" placeholder="Example : Lantai 6" >
                        </div>
                        <div class="mb-5">
                            <label for="telp" class="text-sm">No Telp</label>
                            <input required type="text" name="" v-model="form.no_telp" id="telp" class="mt-1 text-sm focus:ring-1 focus:ring-blue-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-blue-400 rounded-lg p-3" placeholder="Example : 6281234567" >
                        </div>
                        <Button class="w-full mt-7 font-medium py-5">Daftar</Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</template>