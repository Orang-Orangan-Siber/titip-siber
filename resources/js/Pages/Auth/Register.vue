<script setup>
    // import Navbar from '@/Component/'
</script>

<style scoped>

.wrapper-content {
    background-image: url('https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/test-discovery/2023/11/02/a967c352-84f5-4e80-b83c-27d7946404a2-1698921296639-d5b416daa2454b2e114b2de8150a502c.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    height: 100vh; 
}


</style>

<template>
    <div class="wrapper-content flex justify-center">
        <div class="mt-8 w-full max-w-[400px]">
            <div class="text-center">
                <h1 class="text-3xl font-semibold text-indigo-700">Contaiment</h1>
            </div>
            <div class="lg:my-7 my-5 w-full lg:shadow-md shadow-none rounded-xl lg:border border-0 bg-white">
                <div class="card-content p-7">
                    <div class="text-center mb-5 lg:block hidden">
                        <h1 class="text-2xl font-semibold">Selamat Datang!</h1>
                        <p class="text-slate-500 mt-2 text-sm">Silahkan daftar untuk membuat akun</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="text-slate-600 text-sm tracking-wide">Email</label>
                        <input type="text" name="" id="email" class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-slate-600 text-sm tracking-wide">Password</label>
                        <input type="password" name="" id="password" class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-slate-600 text-sm tracking-wide">Confirm Password</label>
                        <input type="password" name="" id="password" class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                    </div>
                    <button class="mt-5 w-full bg-indigo-500 font-medium bg-slate-200 text-slate-400 hover:cursor-no-drop rounded-lg py-3">Daftar</button>
                    <div class="mt-4">
                        <div class="text-center mb-6">
                            <p class="text-sm text-slate-500">Sudah punya akun? <a href="/auth/login" class="text-indigo-500 hover:underline">masuk</a></p>
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
