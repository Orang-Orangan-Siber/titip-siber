<script setup>
import { Button } from "@/Components/ui/button";
import { Checkbox } from "@/Components/ui/checkbox";
import Wrapper from "@/Pages/Auth/Wrapper.vue";
import { useForm } from "@inertiajs/vue3";
import { Alert, AlertDescription, AlertTitle } from '@/Components/ui/alert'
import { AlertCircle } from 'lucide-vue-next'

const form = useForm({
    nim: "",
    password: "",
    remember_me: false,
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
            <div class="flex justify-center">
                <div class="lg:w-[550px] w-ful">
                    <div class="card-content p-7">
                        <form @submit.prevent="submit">
                            <div class="text-center mb-5">
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
                                    <label for="nim" class="text-slate-600 text-sm tracking-wide">Nomor Induk</label>
                                    <input type="text" name="" id="nim" placeholder="Nomor induk" v-model="form.nim"
                                        class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                                    <p v-if="form.hasErrors" class="text-sm mt-1 text-red-500">
                                        {{ form.errors.nim }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="text-slate-600 text-sm tracking-wide">Password</label>
                                    <input type="password" name="" placeholder="✡✡✡✡✡✡" id="password" v-model="form.password"
                                        class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                                    <p v-if="form.hasErrors" class="text-sm mt-1 text-red-500">
                                        {{ form.errors.password }}
                                    </p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox" id="remember_me" v-model="form.remember_me" class="peer h-4 w-4 shrink-0 rounded-sm border border-slate-400 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground " />
                                    <label for="remember_me" class="text-[14px] ps-1 text-slate-600">
                                        Ingat saya
                                    </label>
                                </div>

                                <Button class="w-full mt-8 py-6 font-normal rounded-none" :disabled="form.processing">Masuk</Button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="w-full bg-slate-200 h-[100%] ">
                    <div class="my-3 me-3"></div>
                </div> -->
            </div>
        </section>

        <div class="fixed w-[70px] h-[70px] bg-orange-500 rounded-full right-[40px] bottom-[40px]"></div>
      
    <!-- </Wrapper> -->
</template>
