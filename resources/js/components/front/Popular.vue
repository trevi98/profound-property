<template>
    <div class="px-20 pb-20">
        <ViewAll name="Popular Areas in Dubai" />

        <div
            class="grid gap-y-6 gap-x-[31px] h-[800px] grid-rows-[repeat(12,1fr)] grid-cols-[repeat(12,1fr)] hover:cursor-pointer"
        >
            <div
                class="bg-[url(/images/551.png)] col-[span_8] row-[span_4] p-6 relative rounded-[24px] bg-center layout hover:cursor-pointer"
            >
                <div class="relative flex flex-column h-[100%] justify-end">
                    <h4 class="text-3xl text-[#ffffff]">
                        Farm gardens the valley
                    </h4>
                    <p class="text-[#F5F5F5] text-xl">
                        Farm gardens the valley
                    </p>
                </div>
            </div>
            <div
                class="bg-[url(/images/FB_IMG.png)] col-[span_4] row-[span_8] relative rounded-[24px] p-6 layout hover:cursor-pointer"
            >
                <div class="relative flex flex-column h-[100%] justify-end">
                    <h4 class="text-3xl text-[#ffffff]">
                        Farm gardens the valley
                    </h4>
                    <p class="text-[#F5F5F5] text-xl">
                        Farm gardens the valley
                    </p>
                </div>
            </div>
            <div
                class="bg-[url(/images/photo.png)] col-[span_5] row-[span_4] relative rounded-[24px] p-6 layout hover:cursor-pointer"
            >
                <div class="relative flex flex-column h-[100%] justify-end">
                    <h4 class="text-3xl text-[#ffffff]">
                        Farm gardens the valley
                    </h4>
                    <p class="text-[#F5F5F5] text-xl">
                        Farm gardens the valley
                    </p>
                </div>
            </div>
            <div
                class="bg-[url(/images/photo_2021.png)] col-[span_3] row-[span_4] relative rounded-[24px] p-6 layout hover:cursor-pointer"
            >
                <div class="relative flex flex-column h-[100%] justify-end">
                    <h4 class="text-3xl text-[#ffffff]">
                        Farm gardens the valley
                    </h4>
                    <p class="text-[#F5F5F5] text-xl">
                        Farm gardens the valley
                    </p>
                </div>
            </div>
            <div
                class="bg-[url(/images/661.png)] col row-[span_4] col-[span_6] relative rounded-[24px] p-6 layout hover:cursor-pointer"
            >
                <div class="relative flex flex-column h-[100%] justify-end">
                    <h4 class="text-3xl text-[#ffffff]">
                        Farm gardens the valley
                    </h4>
                    <p class="text-[#F5F5F5] text-xl">
                        Farm gardens the valley
                    </p>
                </div>
            </div>
            <div
                class="bg-[url(/images/661.png)] row-[span_4] col-[span_6] relative rounded-[24px] p-6 layout hover:cursor-pointer"
            >
                <div class="relative flex flex-column h-[100%] justify-end">
                    <h4 class="text-3xl text-[#ffffff]">
                        Farm gardens the valley
                    </h4>
                    <p class="text-[#F5F5F5] text-xl">
                        Farm gardens the valley
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ViewAll from "./ViewAll.vue";
export default {
    components: {
        ViewAll,
    },
};
</script>

<style scoped>
.layout::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgb(0, 0, 0, 40%);
    top: 0;
    left: 0;
    border-radius: 24px;
}
.layout {
    background-position: center;
    transition: background-size 0.4s ease-in;
    background-repeat: no-repeat;
    background-size: 100%;
}
.layout:hover {
    background-size: 120%;
}
</style>
