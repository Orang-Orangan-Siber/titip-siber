<script setup>
import Button from '@/Components/ui/button/Button.vue'

import {
  NavigationMenu,
  NavigationMenuContent,
  NavigationMenuItem,
  NavigationMenuLink,
  NavigationMenuList,
  NavigationMenuTrigger,
} from "@/Components/ui/navigation-menu";

import {
  Sheet,
  SheetContent,
  SheetDescription,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from '@/Components/ui/sheet'

const components = [
  {
    title: "Alert Dialog",
    href: "/docs/components/alert-dialog",
    description:
      "A modal dialog that interrupts the user with important content and expects a response.",
  },
  {
    title: "Hover Card",
    href: "/docs/components/hover-card",
    description:
      "For sighted users to preview content available behind a link.",
  },
  {
    title: "Progress",
    href: "/docs/components/progress",
    description:
      "Displays an indicator showing the completion progress of a task, typically displayed as a progress bar.",
  },
  {
    title: "Scroll-area",
    href: "/docs/components/scroll-area",
    description: "Visually or semantically separates content.",
  },
  {
    title: "Tabs",
    href: "/docs/components/tabs",
    description:
      "A set of layered sections of content—known as tab panels—that are displayed one at a time.",
  },
  {
    title: "Tooltip",
    href: "/docs/components/tooltip",
    description:
      "A popup that displays information related to an element when the element receives keyboard focus or the mouse hovers over it.",
  },
];

import { ref, onMounted, onUnmounted } from 'vue'

const navbar = ref(null)

const handleScroll = () => {
  if (navbar.value) {
    if (window.scrollY > 55) {
      navbar.value.style.boxShadow = '0 2px 12px 0 rgba(36,50,66,.075)'
    } else {
      navbar.value.style.boxShadow = 'none'
    }
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})

</script>


<style scoped>
.navbar {
  transition: box-shadow 0.3s ease;
}

</style>


<template>

<div class="banner bg-slate-50 text-center h-[55px] flex items-center justify-center">
    <h1 class="text-sm">Program intensif terbaru, Contaiment Camp 2025 powered by Cyber University. Segera Daftar!</h1>
</div>
<nav ref="navbar" class="navbar w-full bg-white sticky top-0 left-0 right-0">
    <div class="flex py-4 lg:mx-10 mx-4">
        <div class="navbar-brand flex items-center me-10">
            <a href="" class="font-bold text-xl text-orange-500">TitipSiber</a>
        </div>
        <NavigationMenu class="mx-auto lg:flex hidden">
            <NavigationMenuList>
                <NavigationMenuItem>
                    <NavigationMenuLink href="/docs/introduction" class="group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground ">
                    Beranda
                    </NavigationMenuLink>
                </NavigationMenuItem>
                <NavigationMenuItem>
                    <NavigationMenuTrigger>Competition</NavigationMenuTrigger>
                    <NavigationMenuContent>
                        <ul class="grid gap-3 p-6 md:w-[400px] lg:w-[500px] lg:grid-cols-[minmax(0,.75fr)_minmax(0,1fr)]">
                            <li class="row-span-3">
                            <NavigationMenuLink as-child>
                                <a
                                class="flex h-full w-full select-none flex-col justify-end rounded-md bg-gradient-to-b from-gray-200/50 to-gray-300 p-6 no-underline outline-none focus:ring focus:ring-blue-500"
                                href="/"
                                >
                                <img
                                    src="https://www.radix-vue.com/logo.svg"
                                    class="h-6 w-6"
                                    alt="Logo"
                                />
                                <div class="mb-2 mt-4 text-lg font-medium">shadcn/ui</div>
                                <p class="text-sm leading-tight text-gray-600">
                                    Beautifully designed components built with Radix UI and
                                    Tailwind CSS.
                                </p>
                                </a>
                            </NavigationMenuLink>
                            </li>
                            <li>
                            <NavigationMenuLink as-child>
                                <a
                                href="/docs/introduction"
                                class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-gray-200 focus:bg-gray-200"
                                >
                                <div class="text-sm font-medium">Introduction</div>
                                <p class="line-clamp-2 text-sm text-gray-600">
                                    Re-usable components built using Radix UI and Tailwind CSS.
                                </p>
                                </a>
                            </NavigationMenuLink>
                            </li>
                            <li>
                            <NavigationMenuLink as-child>
                                <a
                                href="/docs/installation"
                                class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-gray-200 focus:bg-gray-200"
                                >
                                <div class="text-sm font-medium">Installation</div>
                                <p class="line-clamp-2 text-sm text-gray-600">
                                    How to install dependencies and structure your app.
                                </p>
                                </a>
                            </NavigationMenuLink>
                            </li>
                            <li>
                            <NavigationMenuLink as-child>
                                <a
                                href="/docs/typography"
                                class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-gray-200 focus:bg-gray-200"
                                >
                                <div class="text-sm font-medium">Typography</div>
                                <p class="line-clamp-2 text-sm text-gray-600">
                                    Styles for headings, paragraphs, lists...etc
                                </p>
                                </a>
                            </NavigationMenuLink>
                            </li>
                        </ul>
                    </NavigationMenuContent>
                </NavigationMenuItem>

                <NavigationMenuItem>
                    <NavigationMenuTrigger>Learning</NavigationMenuTrigger>
                    <NavigationMenuContent>
                        <ul class="grid gap-3 p-4 w-[400px] md:w-[500px] md:grid-cols-2 lg:w-[600px]">
                            <li v-for="component in components" :key="component.title">
                            <NavigationMenuLink as-child>
                                <a
                                :href="component.href"
                                class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-gray-200 focus:bg-gray-200"
                                >
                                <div class="text-sm font-medium">{{ component.title }}</div>
                                <p class="line-clamp-2 text-sm text-gray-600">
                                    {{ component.description }}
                                </p>
                                </a>
                            </NavigationMenuLink>
                            </li>
                        </ul>
                    </NavigationMenuContent>
                </NavigationMenuItem>

                <NavigationMenuItem>
                    <NavigationMenuLink href="/docs/introduction" class="group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground">
                    Documentation
                    </NavigationMenuLink>
                </NavigationMenuItem>
            </NavigationMenuList>
        </NavigationMenu>


        <div class="lg:flex md:flex hidden gap-3 items-center lg:ms-0 md:ms-auto">
            <div class="">
                <a href="" class="text-sm border border-slate-700 text-slate-700 py-3 px-6">
                    Masuk
                </a>
            </div>
            <div class="">
                <a href="" class="text-sm border border-slate-700 py-3 px-6 bg-slate-700 text-white">
                    Daftar
                </a>
            </div>
        </div>
        <div class="lg:hidden flex items-center md:ms-5 ms-auto">
            <Sheet>
                <SheetTrigger>
                    <svg strokewidth="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                        <path d="M3 19H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M3 12H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M3 5H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </SheetTrigger>
                <SheetContent>
                    <SheetHeader>
                        <SheetTitle>Contaiment</SheetTitle>
                        <div class="flex gap-3 items-center mt-3">
                            <div class="">
                                <a href="" class="text-sm border border-slate-700 text-slate-700 py-3 px-6">
                                    Masuk
                                </a>
                            </div>
                            <div class="">
                                <a href="" class="text-sm border border-slate-700 py-3 px-6 bg-slate-700 text-white">
                                    Daftar
                                </a>
                            </div>
                        </div>
                        <hr class="my-5">
                    </SheetHeader>
                    <SheetDescription>
                        
                    This action cannot be undone. This will permanently delete your account and remove your data from our servers.
                    </SheetDescription>
                </SheetContent>
            </Sheet>
        </div>


    </div>
</nav>

</template>