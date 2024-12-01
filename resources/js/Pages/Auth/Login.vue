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
    <Wrapper>
        <div class="card-content p-7">
            <form @submit.prevent="submit">
                <div class="text-center mb-5 lg:block hidden">
                    <h1 class="text-2xl font-semibold">Selamat Datang!</h1>
                    <p class="text-slate-500 mt-2 text-sm">Silahkan daftar untuk membuat akun</p>
                </div>
                <Alert v-show="form.errors.LoginError" variant="destructive" class="mb-3">
                    <AlertCircle class="w-4 h-4" />
                    <AlertTitle>Error</AlertTitle>
                    <AlertDescription>
                        {{form.errors.LoginError}}
                    </AlertDescription>
                </Alert>
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

                <Button class="w-full mt-5 py-6 font-medium rounded-lg" :disabled="form.processing">Masuk</Button>
            </form>
        </div>
    </Wrapper>
</template>
