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
                        <p class="text-slate-500 mt-2 text-sm">Silahkan login untuk mengakses akun</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="text-slate-600 text-sm tracking-wide">Email</label>
                        <input type="text" name="" id="email" class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-slate-600 text-sm tracking-wide">Password</label>
                        <input type="password" name="" id="password" class="mt-1 focus:ring-1 focus:ring-indigo-400 focus:outline-none w-full text-slate-600 border border-slate-300 focus:border-indigo-400 rounded-lg p-3">
                    </div>
                    <div class="flex justify-end">
                        <a href="" class="text-indigo-500 text-sm font-medium">Lupa password?</a>
                    </div>
                    <button class="mt-5 w-full bg-indigo-500 font-medium bg-slate-200 text-slate-400 hover:cursor-no-drop rounded-lg py-3">Masuk</button>
                    <div class="mt-4">
                        <div class="text-center mb-6">
                            <p class="text-sm text-slate-500">Belum punya akun? <a href="/auth/register" class="text-indigo-500 hover:underline">daftar</a></p>
                        </div>
                        <div class="flex justify-center items-center gap-3 mb-5">
                            <div class="bg-slate-300 w-full h-[1px]"></div>
                            <p class="text-xs flex-shrink-0 text-slate-500">Atau masuk dengan</p>
                            <div class="bg-slate-300 w-full h-[1px]"></div>
                        </div>
                        <div>
                            <a href="/oauth/google" class="flex items-center justify-center border border-slate-300 py-3 rounded-lg">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 48 48" class="LgbsSe-Bz112c me-3">
                                    <g>
                                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                        <path fill="none" d="M0 0h48v48H0z"></path>
                                    </g>
                                </svg>
                                <span class="font-medium text-slate-500">Google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
