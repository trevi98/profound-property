<template>
    <div class="px-20 pb-16">
        <h2
            class="text-primary-color text-primary-font pb-14 csm:text-[#000000]"
        >
            Properties for sale in Dubai
        </h2>
        <div class="flex justify-between items-center pb-16">
            <div class="flex justify-start">
                <div class="flex justify-start items-center mr-12">
                    <h4 class="text-[#212121] text-xl mr-4">Show price in:</h4>
                    <div class="flex">
                        <p
                            @click="price"
                            id="1"
                            :class="
                                activePrice == '1'
                                    ? 'bg-primary-color text-[#ffffff]'
                                    : 'text-[#000000] border-solid border-[1px] border-primary-color'
                            "
                            class="rounded-[50%] mr-4 py-[15.5px] px-[12.5px] hover:cursor-pointer"
                        >
                            AED
                        </p>
                        <p
                            :class="
                                activePrice == '2'
                                    ? 'bg-primary-color text-[#ffffff]'
                                    : 'text-[#000000] border-solid border-[1px] border-primary-color'
                            "
                            class="rounded-[50%] mr-4 py-[15.5px] px-[12.5px] hover:cursor-pointer"
                            @click="price"
                            id="2"
                        >
                            USD
                        </p>
                        <p
                            :class="
                                activePrice == '3'
                                    ? 'bg-primary-color text-[#ffffff]'
                                    : 'text-[#000000] border-solid border-[1px] border-primary-color'
                            "
                            class="rounded-[50%] mr-4 py-[15.5px] px-[12.5px] hover:cursor-pointer"
                            @click="price"
                            id="3"
                        >
                            EUR
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <h4 class="text-[#212121] text-xl mr-4">Show area in:</h4>
                    <div class="flex justifay-between items-center">
                        <p
                            @click="area"
                            :class="
                                activeArea == '1'
                                    ? 'bg-primary-color text-[#ffffff]'
                                    : 'text-[#000000] border-solid border-[1px] border-primary-color'
                            "
                            id="1"
                            class="rounded-[50%] mr-4 py-[15.5px] px-[6.5px] hover:cursor-pointer"
                        >
                            Sq. Ft.
                        </p>
                        <p
                            @click="area"
                            :class="
                                activeArea == '2'
                                    ? 'bg-primary-color text-[#ffffff]'
                                    : 'text-[#000000] border-solid border-[1px] border-primary-color'
                            "
                            id="2"
                            class="rounded-[50%] mr-4 py-[15.5px] px-[6.5px] hover:cursor-pointer"
                        >
                            Sq. M.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <router-link :to="{ name: 'home' }">
                    <div
                        class="flex items-senter bg-[#006878] rounded-[10px] px-4 py-[9px] mr-12"
                    >
                        <p class="text-xl text-[#ffffff] mr-2">Go to Map</p>
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M2.29004 7.77998V17.51C2.29004 19.41 3.64004 20.19 5.28004 19.25L7.63004 17.91C8.14004 17.62 8.99004 17.59 9.52004 17.86L14.77 20.49C15.3 20.75 16.15 20.73 16.66 20.44L20.99 17.96C21.54 17.64 22 16.86 22 16.22V6.48998C22 4.58998 20.65 3.80998 19.01 4.74998L16.66 6.08998C16.15 6.37998 15.3 6.40998 14.77 6.13998L9.52004 3.51998C8.99004 3.25998 8.14004 3.27998 7.63004 3.56998L3.30004 6.04998C2.74004 6.36998 2.29004 7.14998 2.29004 7.77998Z"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M8.56006 4V17"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M15.73 6.62012V20.0001"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </router-link>
                <div class="flex justify-end items-center">
                    <h4 class="text-[#212121] text-xl mr-3">Sort by:</h4>
                    <select name="" id="">
                        <option value="" class="text-[#424242] text-base">
                            Featured
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <CardImage />
        <CardImage />
        <CardImage />
        <CardImage />
        <CardImage />
        <CardImage />
        <CardImage />
    </div>
</template>

<script>
import CardImage from "./CardImage.vue";
export default {
    components: {
        CardImage,
    },
    data() {
        return {
            activePrice: 1,
            activeArea: 1,
        };
    },
    methods: {
        price(event) {
            this.activePrice = event.target.id;
        },
        area(event) {
            this.activeArea = event.target.id;
        },
    },
};
</script>

<style></style>
