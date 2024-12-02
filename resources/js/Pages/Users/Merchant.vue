<script setup>
import Navbar from '@/Components/main/navbar/Navbar.vue';
import StarIcon from '@/Components/icons/Star.vue'
import { Button } from '@/Components/ui/button';
import { reactive, ref, watch } from 'vue';
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/Components/ui/breadcrumb'
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/Components/ui/dialog'
import Textarea from '@/Components/ui/textarea/Textarea.vue';
import Label from '@/Components/ui/label/Label.vue';
import { ShoppingBag } from 'lucide-vue-next';


const menus = reactive([
    {
        id: 1,
        name: 'Sate',
        note: '',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s',
        quantity: 0
    },
    {
        id: 2,
        name: 'Makanan',
        note: '',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s',
        quantity: 0
    },
    {
        id: 3,
        name: 'Minuman',
        note: '',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s',
        quantity: 0
    }
])

const showCard = ref(false)
const itemTotal = ref(0)

const addToCart = (id, operation = "+") => {
    const menu = menus.find((menu) => menu.id === id)
    menu.quantity += operation === "+" ? 1 : -1
}

watch(menus, (newValue, oldValue) => {
    itemTotal.value = 0

    newValue.forEach((menu) => {
        itemTotal.value += menu.quantity
    })

    if (itemTotal.value > 0) {
        showCard.value = true
    } else {
        showCard.value = false
    }
})

</script>

<template>
    <div class="wrapper min-h-screen relative">
        <Navbar />
        <Dialog>
            <DialogTrigger>
                <button class="w-[56px] h-[56px] bg-blue-500 shadow-md rounded-full fixed bottom-[32px] right-[32px]"
                    v-show="showCard">
                    <div class="flex items-center justify-center w-full h-full relative">
                        <ShoppingBag class="text-white" />
                        <span
                            class="absolute top-[-4px] right-[-4px] w-[24px] h-[24px] bg-orange-400 rounded-full text-white flex items-center justify-center font-semibold text-[14px]">{{
                                itemTotal }}</span>
                    </div>
                </button>
            </DialogTrigger>
            <DialogContent>
                <DialogHeader>
                    <DialogTitle>Pembelianmu</DialogTitle>
                    <DialogDescription>
                        Warung Mantap
                    </DialogDescription>
                </DialogHeader>

                <div class="grid gap-y-3">
                    <div class="grid grid-cols-4 items-center" v-for="i in menus.filter((menu) => menu.quantity > 0)">
                        <div class="col-span-2">
                            <h4 class="font-semibold mb-3 line-clamp-2">{{ i.name }}</h4>
                            <Dialog>
                                <DialogTrigger as-child>
                                    <button class="font-semibold text-blue-500">
                                        <div class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="h-5 w-5">
                                                <g clip-path="url(#a)">
                                                    <path fill="currentColor" fill-rule="evenodd"
                                                        d="M9.5 17a1 1 0 1 0 0-2h-1a1 1 0 1 0 0 2h1Zm2-4a1 1 0 1 0 0-2h-3a1 1 0 1 0 0 2h3Zm-3-6a1 1 0 1 0 0 2h7a1 1 0 1 0 0-2h-7Zm10 5a6.5 6.5 0 0 0-6.5 6.5 6.46 6.46 0 0 0 1.013 3.474 43.145 43.145 0 0 1-5.436-.2 6.006 6.006 0 0 1-5.35-5.35 43.157 43.157 0 0 1 0-8.847 6.006 6.006 0 0 1 5.35-5.35 43.157 43.157 0 0 1 8.846 0 6.006 6.006 0 0 1 5.35 5.35c.186 1.812.244 3.624.201 5.436A6.463 6.463 0 0 0 18.5 12Zm0 2a4.5 4.5 0 1 1 0 9.001 4.5 4.5 0 0 1 0-9Zm.75 3.75V16.5a.75.75 0 1 0-1.5 0v1.25H16.5a.75.75 0 0 0 0 1.5h1.25v1.25a.75.75 0 1 0 1.5 0v-1.25h1.25a.75.75 0 1 0 0-1.5h-1.25Z"
                                                        clip-rule="evenodd"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="a">
                                                        <path fill="currentColor" d="M0 0h24v24H0z"></path>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Catatan</span>
                                        </div>
                                    </button>
                                </DialogTrigger>
                                <DialogContent class="sm:max-w-[600px]">
                                    <DialogHeader>
                                        <DialogTitle>{{ i.name }}</DialogTitle>
                                        <DialogDescription class="line-clamp-1">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eaque ex
                                            quod
                                            iusto tempora neque iste repellat atque sit id temporibus architecto
                                            laboriosam, nam ipsam illum sapiente dolore nulla unde.
                                        </DialogDescription>
                                    </DialogHeader>
                                    <div class="grid gap-y-2 pb-2">

                                        <p class="text-base font-medium">Rp. 10.000</p>

                                        <Label class="text-sm mb-0 font-medium mt-4">Catatan (opsional)</Label>
                                        <Textarea v-model="i.note" class="w-full" placeholder="Masukkan catatan" />
                                    </div>
                                    <hr>
                                    <div class="flex items-center">
                                        <div class=" text-sm">Mau berapa?</div>
                                        <div class="qty flex items-center ms-auto space-x-3">
                                            <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                                @click="addToCart(i.id, '-')">-</button>
                                            <p>{{ i.quantity }}</p>
                                            <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                                @click="addToCart(i.id)">+</button>
                                        </div>
                                    </div>
                                </DialogContent>
                            </Dialog>
                        </div>
                        <div class="qty flex items-center ms-auto space-x-3">
                            <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                @click="addToCart(i.id, '-')">-</button>
                            <p>{{ i.quantity }}</p>
                            <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                @click="addToCart(i.id)">+</button>
                        </div>
                        <div class="font-semibold text-end">Rp. 10.000</div>
                    </div>
                </div>

                <hr>

                <div class="flex items-center justify-between">
                    <p class="font-semibold">Total</p>
                    <p class="font-semibold">Rp. 10.000</p>
                </div>

                <Button class="w-full rounded-xl py-5 font-medium mt-4" @click="submit">Checkout</Button>
            </DialogContent>
        </Dialog>


        <div class="grid grid-cols-10 mb-5">
            <div class="col-span-8 col-start-2 ">

                <Breadcrumb>
                    <BreadcrumbList>
                        <BreadcrumbItem>
                            <BreadcrumbLink href="/">
                                Home
                            </BreadcrumbLink>
                        </BreadcrumbItem>
                        <BreadcrumbSeparator />
                        <BreadcrumbItem>
                            <BreadcrumbPage>Warung Mantap</BreadcrumbPage>
                        </BreadcrumbItem>
                    </BreadcrumbList>
                </Breadcrumb>
                <div class="grid grid-cols-1 md:grid-cols-2  mt-5 w-full">
                    <div class="flex space-x-5">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                            alt="food img" loading="lazy" class="w-[96px] h-[96px] object-cover rounded-xl">

                        <div class="">
                            <h1 class="font-semibold text-xl line-clamp-2">Warung Mantap</h1>
                            <p class="text-base mt-2 font-light line-clamp-1">Sate, Makanan, Minuman</p>
                            <p class="text-[15px] font-medium mt-2">Rp. 10.000 - Rp. 15.000</p>
                        </div>
                    </div>

                    <div class="md:ms-auto md:mt-0 mt-4">
                        <div class="md:text-end">Pemilik</div>
                        <div class="font-semibold">Muhammad Fathi Farhat</div>
                        <div class="md:text-end mt-2">Max. Order</div>
                        <div class="md:text-end font-semibold">20:00</div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="grid lg:grid-cols-4 grid-cols-1 gap-x-3 gap-y-6">
                    <div class="border p-3 rounded-2xl transition-[250ms]" v-for="i in menus">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                            alt="food img" loading="lazy" class="w-full h-[228px] object-cover rounded-xl">
                        <div class="mt-1 p-2">
                            <h1 class="font-semibold text-base leading-5 line-clamp-2 mt-2">{{ i.name }}</h1>
                            <p class="text-sm mt-2 font-light line-clamp-1">Sate Padang mantap, enak bgt bangke</p>
                            <Dialog>
                                <DialogTrigger as-child>
                                    <Button variant="link" class="mx-0 px-0 underline">
                                        Detail
                                    </Button>
                                </DialogTrigger>
                                <DialogContent class="sm:max-w-[600px]">
                                    <DialogHeader>
                                        <DialogTitle>Item Details</DialogTitle>
                                        <DialogDescription>
                                            Here's the detail about this Item
                                        </DialogDescription>
                                    </DialogHeader>
                                    <div class="grid gap-4 py-4">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv0mHMCDmrOcWd_m2Ifi9V0_CoPjvt5bx4jA&s"
                                            alt="food img" loading="lazy"
                                            class="w-full h-[228px] object-cover rounded-xl">
                                        <div class="pt-1 p-2">
                                            <h1 class="font-semibold text-lg line-clamp-2">Sate Padang</h1>
                                            <p class="text-sm mt-2 font-light">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Natus, dolores. Quod ipsam reiciendis
                                                blanditiis corrupti perspiciatis voluptatum molestias ea consequuntur!
                                                Odit
                                                esse soluta neque quod cumque porro harum architecto numquam!</p>

                                            <hr class="my-3">

                                            <div class="grid grid-cols-3 mt-5">
                                                <div>
                                                    <h5>Penjual</h5>
                                                    <h1 class="font-semibold">Warung Mantap</h1>
                                                </div>

                                                <div>
                                                    <h5>Lokasi</h5>
                                                    <h1 class="font-semibold">Google Maps</h1>
                                                </div>

                                                <div>
                                                    <h5>Harga</h5>
                                                    <h1 class="font-semibold">Rp. 10.000</h1>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </DialogContent>
                            </Dialog>
                            <p class="text-[15px] font-medium mt-3">Rp. 10.000</p>
                            <Button class="mt-4 w-full rounded-xl py-5 font-medium" @click="addToCart(i.id)"
                                v-if="i.quantity === 0">Tambah</Button>
                            <div class="mt-4 flex items-center content-between w-full" v-else>
                                <Dialog>
                                    <DialogTrigger as-child>
                                        <button class="font-semibold text-blue-500">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    class="h-5 w-5">
                                                    <g clip-path="url(#a)">
                                                        <path fill="currentColor" fill-rule="evenodd"
                                                            d="M9.5 17a1 1 0 1 0 0-2h-1a1 1 0 1 0 0 2h1Zm2-4a1 1 0 1 0 0-2h-3a1 1 0 1 0 0 2h3Zm-3-6a1 1 0 1 0 0 2h7a1 1 0 1 0 0-2h-7Zm10 5a6.5 6.5 0 0 0-6.5 6.5 6.46 6.46 0 0 0 1.013 3.474 43.145 43.145 0 0 1-5.436-.2 6.006 6.006 0 0 1-5.35-5.35 43.157 43.157 0 0 1 0-8.847 6.006 6.006 0 0 1 5.35-5.35 43.157 43.157 0 0 1 8.846 0 6.006 6.006 0 0 1 5.35 5.35c.186 1.812.244 3.624.201 5.436A6.463 6.463 0 0 0 18.5 12Zm0 2a4.5 4.5 0 1 1 0 9.001 4.5 4.5 0 0 1 0-9Zm.75 3.75V16.5a.75.75 0 1 0-1.5 0v1.25H16.5a.75.75 0 0 0 0 1.5h1.25v1.25a.75.75 0 1 0 1.5 0v-1.25h1.25a.75.75 0 1 0 0-1.5h-1.25Z"
                                                            clip-rule="evenodd"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="currentColor" d="M0 0h24v24H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span>Catatan</span>
                                            </div>
                                        </button>
                                    </DialogTrigger>
                                    <DialogContent class="sm:max-w-[600px]">
                                        <DialogHeader>
                                            <DialogTitle>{{ i.name }}</DialogTitle>
                                            <DialogDescription class="line-clamp-1">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eaque ex
                                                quod
                                                iusto tempora neque iste repellat atque sit id temporibus architecto
                                                laboriosam, nam ipsam illum sapiente dolore nulla unde.
                                            </DialogDescription>
                                        </DialogHeader>
                                        <div class="grid gap-y-2 pb-2">

                                            <p class="text-base font-medium">Rp. 10.000</p>

                                            <Label class="text-sm mb-0 font-medium mt-4">Catatan (opsional)</Label>
                                            <Textarea v-model="i.note" class="w-full" placeholder="Masukkan catatan" />
                                        </div>
                                        <hr>
                                        <div class="flex items-center">
                                            <div class=" text-sm">Mau berapa?</div>
                                            <div class="qty flex items-center ms-auto space-x-3">
                                                <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                                    @click="addToCart(i.id, '-')">-</button>
                                                <p>{{ i.quantity }}</p>
                                                <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                                    @click="addToCart(i.id)">+</button>
                                            </div>
                                        </div>
                                    </DialogContent>
                                </Dialog>


                                <div class="qty flex items-center ms-auto space-x-3">
                                    <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                        @click="addToCart(i.id, '-')">-</button>
                                    <p>{{ i.quantity }}</p>
                                    <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                        @click="addToCart(i.id)">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<style lang="scss" scoped></style>