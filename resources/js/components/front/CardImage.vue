<template>
    <div class="flex pb-4">
        <div
            class="flex-[0.95] rounded-tl-[24px] rounded-bl-[24px] overflow-hidden h-[100%] w-[100%]"
        >
            <router-link :to="{ name: 'home' }">
                <div class="relative layout">
                    <img
                        src="./images/331.png"
                        class="h-[100%] w-[100%] transition-[0.4s]"
                        alt=""
                    />
                </div>
            </router-link>
        </div>
        <div
            class="bg-[#0E373F] rounded-tr-[24px] rounded-br-[24px] py-8 px-9 flex flex-column justify-between flex-[0.5] relative left-[-1px] text-center"
        >
            <div>
                <h2 class="text-3xl text-[#F5F5F5] pb-4">
                    Farm gardens the valley
                </h2>
                <p class="text-[#F5F5F5] pb-4 text-xl">Price: 22000$</p>
                <p class="text-[#F5F5F5] text-xl pb-4">Area: 1200 Sq. M.</p>
                <p class="text-[#E0E0E0] text-xl">
                    Offering innovative, institutional-caliber investment
                    expertise and solutions.Offering innovative,
                    institutional-caliber investment expertise and solutions.
                </p>
            </div>
            <div class="flex items-center cursor-pointer">
                <p class="text-xl text-[#F5F5F5] mr-3">Learn more</p>
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M14.4302 5.92993L20.5002 11.9999L14.4302 18.0699"
                        stroke="#F5F5F5"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M3.5 12H20.33"
                        stroke="#F5F5F5"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
import Card from "./Card.vue";
export default {
    components: {
        Card,
    },
};
</script>

<style scoped>
.layout::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgb(0 54 63 / 40%);
    top: 0;
    left: 0;
    z-index: 1;
}
.layout:hover img {
    transform: scale(1.2);
}
</style>
