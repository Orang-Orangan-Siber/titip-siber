<script setup>

import Button from '@/Components/ui/button/Button.vue'
import Input from '@/Components/ui/input/Input.vue'
import { Search, LayoutGrid, ShoppingCart, ShoppingBag, ScrollText, Store, User } from 'lucide-vue-next'

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuGroup,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuPortal,
  DropdownMenuSeparator,
  DropdownMenuShortcut,
  DropdownMenuSub,
  DropdownMenuSubContent,
  DropdownMenuSubTrigger,
  DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu'
import {
  Cloud,
  CreditCard,
  Github,
  Keyboard,
  LifeBuoy,
  LogOut,
  Mail,
  MessageSquare,
  Plus,
  PlusCircle,
  Settings,
  UserPlus,
  Users,
} from 'lucide-vue-next'

</script>


<style scoped>

    .sidebar .menu .nav-link {
        border-radius: 50%;
    }

</style>


<template>

    <nav>
        <div class="flex">
            <div class="sidebar bg-slate-100 h-[100vh] w-[90px] fixed left-0 top-0 bottom-0 lg:block hidden">
                <div class="navbar-brand flex justify-center mt-5">
                    <img src="https://github-production-user-asset-6210df.s3.amazonaws.com/89033712/391241159-1deed505-b96b-4d8f-bed8-5de918202b41.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAVCODYLSA53PQK4ZA%2F20241130%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20241130T135916Z&X-Amz-Expires=300&X-Amz-Signature=8b5156bcc6619e32eb736d829f21a236a938c05b2f9eb2f5370ddbbc9e5ae6c5&X-Amz-SignedHeaders=host" alt="logo" width="55px">
                    <!-- <h1 class="text-[30px] font-bold text-blue-500">T<span class="text-orange-500">S</span></h1> -->
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

            <div class="bottom_bar lg:hidden block fixed bottom-0 right-0 left-0 z-[99]">
                <div class="w-full bg-white h-[65px] border-t">
                    <div class="flex items-center h-full justify-between mx-5">
                        <div class="flex items-center justify-around w-full">
                            <a href=""class="">
                                <ShoppingBag :stroke-width="1"/>
                            </a>
                            <a href="" class="">
                                <ScrollText :stroke-width="1"/>
                            </a>
                        </div>
                        <div class="">
                            <a href="" class="block bg-blue-500 p-4 rounded-full relative top-[-20px]">
                                <LayoutGrid class="text-white"/>
                            </a>
                        </div>
                        <div class="flex items-center justify-around w-full">
                            <a href="" class="">
                                <ShoppingCart :stroke-width="1"/>
                            </a>
                            <a href="" class="">
                                <User :stroke-width="1"/>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="lg:ms-[90px] ms-auto w-full mb-10">

                <nav class="">
                    <div class="flex items-center p-3 lg:mx-8 mx-3 justify-between">
                        <a href="" class="navbar-brand">
                            <img src="https://github-production-user-asset-6210df.s3.amazonaws.com/89033712/391241521-fc2d884d-78ec-4ac2-9e2f-df9918716402.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAVCODYLSA53PQK4ZA%2F20241130%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20241130T140629Z&X-Amz-Expires=300&X-Amz-Signature=c61060101f79d48e23745843202d6951ee03061296b20e5b4a379515dd7b55ca&X-Amz-SignedHeaders=host" alt="logo full" width="150px">
                        </a>

                        <div class="mx-5 lg:block hidden">
                            <div class="relative w-full max-w-sm items-center">
                                <Input id="search" type="text" placeholder="Lagi mau pesen apa nih ? .." class="ps-10 bg-slate-50 border-0 w-[500px]" />
                                <span class="absolute start-0 inset-y-0 flex items-center justify-center px-3">
                                    <Search class="size-4 text-muted-foreground" />
                                </span>
                            </div>
                        </div>

                      
                        <div class="flex items-center gap-7">
                            <div class="lg:hidden block">
                                <Search class="size-5" />
                            </div>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                            </div>
                            <DropdownMenu>
                                <DropdownMenuTrigger as-child class="rounded-full flex items-center cursor-pointer">
                                    <img src="https://i.ibb.co.com/vj3rgPD/115761253-p8-master1200.jpg" alt="avatar" width="42px" class="rounded-full">
                                </DropdownMenuTrigger>
                                <DropdownMenuContent class="w-56 me-5">
                                    <DropdownMenuLabel>My Account</DropdownMenuLabel>
                                    <DropdownMenuSeparator />
                                    <DropdownMenuGroup>
                                        <DropdownMenuItem>
                                            <User class="mr-2 h-4 w-4" />
                                            <span>Profile</span>
                                            <DropdownMenuShortcut>⇧⌘P</DropdownMenuShortcut>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem>
                                            <CreditCard class="mr-2 h-4 w-4" />
                                            <span>Billing</span>
                                            <DropdownMenuShortcut>⌘B</DropdownMenuShortcut>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem>
                                            <Settings class="mr-2 h-4 w-4" />
                                            <span>Settings</span>
                                            <DropdownMenuShortcut>⌘S</DropdownMenuShortcut>
                                        </DropdownMenuItem>
                                    </DropdownMenuGroup>
                                    <DropdownMenuSeparator />
                                    <DropdownMenuItem>
                                        <Github class="mr-2 h-4 w-4" />
                                        <span>GitHub</span>
                                    </DropdownMenuItem>
                                    <DropdownMenuItem>
                                        <LifeBuoy class="mr-2 h-4 w-4" />
                                        <span>Support</span>
                                    </DropdownMenuItem>
                                    <DropdownMenuItem disabled>
                                        <Cloud class="mr-2 h-4 w-4" />
                                        <span>API</span>
                                    </DropdownMenuItem>
                                    <DropdownMenuSeparator />
                                    <DropdownMenuItem>
                                        <LogOut class="mr-2 h-4 w-4" />
                                        <span>Log out</span>
                                        <DropdownMenuShortcut>⇧⌘Q</DropdownMenuShortcut>
                                    </DropdownMenuItem>
                                </DropdownMenuContent>
                            </DropdownMenu>
                        </div>


                    </div>
                </nav>
                
                <div class="px-5">
                    <slot/>
                </div>

            </div>

        </div>
    </nav>

</template>