<template>
    <div class="flex pb-4">
        <div>
            <img
                src="../../../assets/dubai1.jpg"
                class="rounded-tl-[24px] rounded-bl-[24px]"
                alt=""
            />
        </div>
        <div
            class="bg-[#0E373F] rounded-tr-[24px] rounded-br-[24px] py-8 px-9 flex flex-column justify-between"
        >
            <div class="">
                <h2 class="text-5xl text-[#ffffff] pb-2 text-center">
                    Farm gardens the valley
                </h2>
                <p class="text-[#E0E0E0] pb-4 text-2xl text-center">
                    Farm gardens the valley
                </p>
                <p class="text-[#E0E0E0] text-center text-xl">
                    Offering innovative, institutional-caliber investment
                    expertise and solutions.Offering innovative,
                    institutional-caliber investment expertise and solutions.
                </p>
            </div>
            <div class="flex items-center cursor-pointer">
                <p class="text-xl text-[#ffffff] mr-3">Learn more</p>
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M14.4302 5.92993L20.5002 11.9999L14.4302 18.0699"
                        stroke="#fff"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M3.5 12H20.33"
                        stroke="#fff"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
        </div>
        <!-- <Card show="true" class="rounded-tl-none rounded-bl-none">
            <span class="text-center text-[#9E9E9E]"
                >Farm gardens the valley</span
            >
            <p class="text-center text-[#9E9E9E]">
                Offering innovative, institutional-caliber investment expertise
                and solutions.Offering innovative, institutional-caliber
                investment expertise and solutions.
            </p>
        </Card> -->
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

<style></style>
