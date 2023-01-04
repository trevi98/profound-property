<template>
    <div class="px-20 pb-32">
        <h1 class="text-4xl text-[#000000] text-left pb-8">
            Media Publication’s
        </h1>
        <div class="flex justify-between">
            <div class="flex w-[50%] flex-wrap">
                <FarmGardens height="true" width="true" />
                <FarmGardens height="true" width="true" />
                <FarmGardens height="true" width="true" />
                <FarmGardens height="true" width="true" />
                <FarmGardens height="true" width="true" />
                <FarmGardens height="true" width="true" />
            </div>
            <div class="w-[40%] pb-16">
                <div class="border-solid border-[#212121] border-b-2"></div>
                <DetailsFarm />
                <DetailsFarm />
                <DetailsFarm />
                <DetailsFarm />
                <DetailsFarm />
            </div>
        </div>
        <div
            class="flex text-base font-bold items-center rounded-[10px] cursor-pointer"
        >
            <p class="text-[#424242] pr-4">View all</p>
            <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M14.4302 5.92993L20.5002 11.9999L14.4302 18.0699"
                    stroke="#424242"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M3.5 12H20.33"
                    stroke="#424242"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </div>
    </div>
</template>

<script>
import FarmGardens from "./FarmGardens.vue";
import DetailsFarm from "./DetailsFarm.vue";
export default {
    components: { FarmGardens, DetailsFarm },
};
</script>

<style></style>
