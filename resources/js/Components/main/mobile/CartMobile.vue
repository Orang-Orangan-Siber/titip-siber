<script setup>

import { ArrowLeft, ChevronUp } from 'lucide-vue-next';
import MarketIcon from '@/Components/icons/Market.vue'
import { ref, defineEmits } from 'vue';

const props = defineProps({
                    isVisible: {
                        type: Boolean,
                        default: false, 
                    },
                });


const detailOrderContent = ref(null);
const icon_up = ref(null);

const showDetailOrder = () => {
  if (detailOrderContent.value) {
    const content = detailOrderContent.value;
    const icon = icon_up.value;
    if (content.classList.contains("translate-y-[60px]")) {
      content.classList.remove("translate-y-[60px]");
      icon.classList.remove("rotate-180");
      
    } else {
      content.classList.add("translate-y-[60px]");
      icon.classList.add("rotate-180");
    }
  }
};


// Emit event ke parent
const emit = defineEmits(["update:isVisible"]);

const closeMenu = () => {
  emit("update:isVisible", false); 
};

</script>

<style scope>

/* body {
    overflow: hidden;
} */ 

.body::-webkit-scrollbar {
    display: none;
}

</style>


<template>
    <div class="lg:hidden block">   
        <div :class="['bg-slate-50 w-full h-[100vh] z-[101] fixed top-0 left-0 bottom-0 right-0 duration-500', isVisible ? 'translate-x-0' : 'translate-x-[105%]']">
            <div class="">
                <div class="header bg-white w-full h-[60px] shadow fixed top-0 left-0 right-0">
                    <div class="flex items-center h-full mx-4">
                        <div class="flex gap-3">
                            <button @click="closeMenu"><ArrowLeft class="text-slate-400" /></button>
                            <p class="text-slate-500 font-medium">Keranjang</p>
                        </div>
                    </div>
                </div>

                <div class="body py-[60px] overflow-auto h-[100vh]">
                    <div class="item my-3 bg-white px-5 py-4 h-" v-for="i in 13">
                        <div class="mb-2 flex items-center gap-2">
                            <MarketIcon/>
                            <a href="" class="text-[13px] font-semibold">Elaine Store ></a>
                        </div>
                        <div class="flex gap-3">
                            <img src="https://lingkarwilis.com/wp-content/uploads/2024/03/2024-03-14-15_17_52-Window.png" alt="food img" loading="lazy" class="w-[90px] h-[90px] object-cover rounded-lg">
                            <div class="">
                                <a href="" class="line-clamp-1 text-[13px]">Geprek kesayangan tercinta mantap keren enak banget le</a>
                                <p class="text-xs mt-1 mb-2">12 Sept. 2024</p>
                                <p class="mt-auto text-sm font-semibold text-orange-600">Rp. 15.000</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div ref="detailOrderContent" class="sub-footer fixed left-0 right-0 bottom-[60px] border-t duration-150 bg-white w-full h-[60px] z-[0]">
                    <div class="flex justify-around mx-5 h-full items-center">
                        <p class="text-sm">Total Item</p>
                        <p class="text-sm font-semibold">40</p>
                    </div>
                </div>
                <div class="footer fixed bottom-0 left-0 right-0 ">
                    <div class="bg-white w-full h-[60px] border-t">
                        <div class="flex items-center h-full justify-between">
                            <button @click="showDetailOrder" class="ms-5 text-slate-400"><ChevronUp ref="icon_up" class="duration-150" /></button>
                            <div class="h-full flex items-center gap-3">
                                <p class="text-sm">Total : <span class="text-orange-600 font-semibold">Rp. 150.000</span></p>
                                <button class="w-[120px] h-full bg-orange-500 text-white text-sm">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>