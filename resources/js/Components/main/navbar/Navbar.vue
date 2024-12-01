<script setup>

import Input from '@/Components/ui/input/Input.vue'

import { Search, User, LogOut, Settings } from 'lucide-vue-next'

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuGroup,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu'
import { Link } from '@inertiajs/vue3';

</script>

<template>
      <nav class="">
        <div class="flex items-center p-3 lg:mx-8 mx-3 justify-between">
            <Link href="/" class="navbar-brand">
                <img src="https://i.ibb.co.com/Lt02dn4/New-Project-58-81-C0720-2.png" alt="logo full" width="45">
            </Link>

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
                            </DropdownMenuItem>
                            <DropdownMenuItem>
                                <Settings class="mr-2 h-4 w-4" />
                                <span>Settings</span>
                            </DropdownMenuItem>
                        </DropdownMenuGroup>
                        <DropdownMenuSeparator />
                        <DropdownMenuItem>
                            <LogOut class="mr-2 h-4 w-4" />
                            <span>Log out</span>
                        </DropdownMenuItem>
                    </DropdownMenuContent>
                </DropdownMenu>
            </div>


        </div>
    </nav>
</template>