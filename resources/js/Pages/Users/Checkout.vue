<script setup>
import Navbar from '@/Components/main/navbar/Navbar.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { ArrowLeft, ClipboardList } from 'lucide-vue-next';
import { reactive } from 'vue';
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
import { Button } from '@/Components/ui/button';
import Label from '@/Components/ui/label/Label.vue';
const page = usePage()

const items = reactive(page.props.items)

const merchant = reactive(page.props.merchant)

const addToCart = (id, operation = "+") => {
    const menu = items.find((menu) => menu.id === id)
    menu.quantity += operation === "+" ? 1 : -1
}

const form = useForm({
    merchant: page.props.merchant.id,
    items: page.props.items.filter((menu) => menu.quantity > 0),
    total: items.reduce((acc, item) => acc + (item.price * item.quantity), 0)
})


const submitForm = () => {
    if (form.processing) {
        return false
    }
    form.post(route("payment-create"), { onStart: () => console.log('fire') });
}


</script>

<template>
    <Navbar />


    <div class="grid grid-cols-12 mb-5">
        <div class="col-span-6 col-start-4 ">
            <div class="flex items-center mt-10 space-x-4">
                <Link :href="route('merchant', merchant.slug)"
                    class="w-[42px] h-[42px] bg-blue-500 rounded-full flex items-center justify-center text-white">
                <ArrowLeft />
                </Link>
                <h1 class="text-2xl font-semibold">{{ merchant.name }}</h1>
            </div>

            <form @submit.prevent="submitForm">
                <div class="w-full p-8 border mt-8 rounded-2xl">
                    <div class="flex items-center space-x-4">
                        <ClipboardList class="text-orange-500" size="32" />
                        <h1 class="text-xl font-semibold">Pembelianmu</h1>
                    </div>

                    <div class="grid grid-cols-4 gap-4 mt-8">
                        <template v-for="item in items.filter((item) => item.quantity > 0)">
                            <div class="col-span-3 flex flex-col">
                                <h4 class="font-semibold">{{ item.name }}</h4>
                                <p class="text-sm mt-2">{{ item.description }}</p>
                                <p class="text-sm mt-2 font-medium">Rp. {{ new
                                    Intl.NumberFormat('id-ID').format(item.price)
                                    }}</p>

                                <Dialog>
                                    <DialogTrigger as-child>
                                        <button class="font-semibold text-blue-500 mt-auto mb-3">
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
                                            <DialogTitle>{{ item.name }}</DialogTitle>
                                            <DialogDescription class="line-clamp-1">
                                                {{ item.description }}
                                            </DialogDescription>
                                        </DialogHeader>
                                        <div class="grid gap-y-2 pb-2">

                                            <p class="text-base font-medium">Rp. {{ new
                                                Intl.NumberFormat('id-ID').format(item.price) }}</p>

                                            <Label class="text-sm mb-0 font-medium mt-4">Catatan (opsional)</Label>
                                            <Textarea v-model="item.note" class="w-full"
                                                placeholder="Masukkan catatan" />
                                        </div>
                                        <hr>
                                        <div class="flex items-center">
                                            <div class=" text-sm">Mau berapa?</div>
                                            <div class="qty flex items-center ms-auto space-x-3">
                                                <button :disabled="items.reduce((a, b) => a + b.quantity, 0) <= 1"
                                                    class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                                    @click="addToCart(item.id, '-')">-</button>
                                                <p>{{ item.quantity }}</p>
                                                <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                                    @click="addToCart(item.id)">+</button>
                                            </div>
                                        </div>
                                    </DialogContent>
                                </Dialog>
                            </div>
                            <div class="col-span-1 flex flex-col items-end">
                                <img :src="item.image" class="w-[92px] h-[92px] object-cover rounded-xl" alt="">

                                <div class="qty flex items-center ms-auto space-x-3 mt-4">
                                    <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                        @click="addToCart(item.id, '-')">-</button>
                                    <p>{{ item.quantity }}</p>
                                    <button class="w-[32px] h-[32px] bg-blue-500 text-white rounded-full"
                                        @click="addToCart(item.id)">+</button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="w-full p-8 border mt-8 rounded-2xl">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-xl font-semibold">Pembayaran</h1>
                    </div>

                    <div class="grid grid-cols-4 gap-4 mt-8">
                        <div class="col-span-3 flex flex-col">
                            <p>Total Pembayaran</p>
                        </div>
                        <div class="col-span-1 flex flex-col items-end">
                            <div class="font-semibold">Rp. {{ new Intl.NumberFormat('id-ID').format(items.reduce((acc,
                                item) => acc +
                                (item.price * item.quantity), 0)) }}</div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <Button class="w-full rounded-xl py-5 font-medium mt-2" type="submit"
                        :disabled="form.processing">Checkout</Button>
                </div>
            </form>
        </div>
    </div>
</template>



<style lang="scss" scoped></style>