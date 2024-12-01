<script setup>


import CartMobile from '@/Components/main/mobile/CartMobile.vue'
import BottomBar from '@/Components/main/mobile/BottomBar.vue'
import Navbar from '@/Components/main/navbar/Navbar.vue'

import { ref } from 'vue'
import { Search, LayoutGrid, ShoppingCart, ShoppingBag, ScrollText, Store, User, LogOut, Settings } from 'lucide-vue-next'

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuGroup,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu'


const showCartContent = ref(false)

</script>


<style scoped>
    .sidebar .menu .nav-link {
        border-radius: 50%;
    }

</style>


<template>

    <CartMobile v-model:isVisible="showCartContent" />

    <nav>
        <div class="flex">
            <div class="sidebar bg-slate-100 h-[100vh] w-[90px] fixed left-0 top-0 bottom-0 lg:block hidden">
                <div class="navbar-brand flex justify-center mt-5">
                    <img src="https://i.ibb.co.com/Lt02dn4/New-Project-58-81-C0720-2.png" alt="logo" width="55px">
                </div>
                <div class="menu mt-20">
                    <div class="flex justify-center">
                        <div class="">
                            <a href="" class="nav-link my-5 block p-3 bg-blue-500 text-white">
                                <LayoutGrid :stroke-width="2"/>
                            </a>
                            <a href="" class="nav-link my-5 block p-3">
                                <ShoppingBag :stroke-width="1"/>
                            </a>
                            <a href="" class="nav-link my-5 block p-3">
                                <ScrollText :stroke-width="1"/>
                            </a>
                            <a href="" class="nav-link my-5 block p-3">
                                <Store :stroke-width="1"/>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <BottomBar v-model:isVisible="showCartContent" />


            <div class="lg:ms-[90px] ms-auto w-full mb-10">
                <Navbar/>
                
                <div class="px-5">
                    <slot/>
                </div>

            </div>

        </div>
    </nav>

</template>