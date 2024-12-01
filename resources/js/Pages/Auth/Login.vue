<script setup>
import { Button } from "@/Components/ui/button";
import Wrapper from "@/Pages/Auth/Wrapper.vue";
import { useForm } from "@inertiajs/vue3";
import { Alert, AlertDescription, AlertTitle } from '@/Components/ui/alert'
import { AlertCircle } from 'lucide-vue-next'

const form = useForm({
    nim: "",
    password: ""
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password")
    });
}

console.log(form.errors)

</script>

<template>
    <!-- <Wrapper> -->
        <section>
            <div class="grid grid-cols-[5fr,7fr]">
                <div class="">
                    <div class="card-content p-7">
                        <form @submit.prevent="submit">
                            <div class="text-center mb-5 lg:block hidden">
                                <div class="flex justify-center mb-5">
                                    <img src="https://i.ibb.co.com/Lt02dn4/New-Project-58-81-C0720-2.png" alt="logo" class="w-[55px]"> 
                                    <div class="bg-blue-400 blur-[60px] opacity-[80%] w-[320px] h-[20px] absolute"></div>
                                </div>
                                <h1 class="text-2xl font-semibold">Selamat Datang!</h1>
                                <p class="text-slate-500 mt-2 text-sm tracking-wide">Silahkan login sebagai warga siberian</p>
                            </div>
                            <Alert v-show="form.errors.LoginError" variant="destructive" class="mb-3">
                                <AlertCircle class="w-4 h-4" />
                                <AlertTitle>Error</AlertTitle>
                                <AlertDescription>
                                    {{form.errors.LoginError}}
                                </AlertDescription>
                            </Alert>
                            <div class="mx-14">
                                <div class="mb-3">
                                    <label for="nim" class="text-slate-600 text-sm tracking-wide">NIM</label>
                                    <input type="text" name="" id="nim" v-model="form.nim"
                                        class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                                    <p v-if="form.hasErrors" class="text-sm mt-1 text-red-500">
                                        {{ form.errors.nim }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="text-slate-600 text-sm tracking-wide">Password</label>
                                    <input type="password" name="" id="password" v-model="form.password"
                                        class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                                    <p v-if="form.hasErrors" class="text-sm mt-1 text-red-500">
                                        {{ form.errors.password }}
                                    </p>
                                </div>
                                <Button class="w-full mt-5 py-6 font-normal rounded-lg" :disabled="form.processing">Masuk</Button>
                                <Button variant="outline" class="w-full mt-5 py-6 font-normal rounded-lg border-orange-500 text-orange-500" :disabled="form.processing">Lupa Password</Button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full bg-slate-200 h-[100%] ">
                    <div class="my-3 me-3"></div>
                </div>
            </div>
        </section>
      
    <!-- </Wrapper> -->
</template>
