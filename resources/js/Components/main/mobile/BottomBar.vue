<template>
    <div class="bottom_bar lg:hidden block fixed bottom-0 right-0 left-0 z-[99]">
        <div class="w-full bg-white h-[65px] border-t">
            <div class="flex items-center h-full justify-between mx-5">
                <div class="flex items-center justify-around w-full">
                    <a href="" class="flex flex-col text-center justify-center">
                        <ShoppingBag :stroke-width="1" class="w-full"/>
                        <p class="text-[11px] text-slate-500 mt-[6px]">Jastip</p>
                    </a>
                    <a href="" class="flex flex-col text-center justify-center">
                        <ShoppingCart :stroke-width="1" class="w-full"/>
                        <p class="text-[11px] text-slate-500 mt-[6px]">Keranjang</p>
                    </a>
                </div>
                <div class="">
                    <a href="/" class="block bg-blue-500 p-4 rounded-full relative top-[-20px]">
                        <LayoutGrid class="text-white"/>
                    </a>
                </div>
                <div class="flex items-center justify-around w-full">
                    <a href="" class="flex flex-col text-center justify-center">
                        <ScrollText :stroke-width="1" class="w-full"/>
                        <p class="text-[11px] text-slate-500 mt-[6px]">Riwayat</p>
                    </a>
                    <a href="" class="flex flex-col text-center justify-center">
                        <User :stroke-width="1" class="w-full"/>
                        <p class="text-[11px] text-slate-500 mt-[6px]">Akun</p>
                    </a>
                </div>

            </div>
        </div>
    </div>
</template>