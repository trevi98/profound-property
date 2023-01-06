<template>
    <div class="main relative">
        <img src="./images/unsplash.png" alt="" class="rounded-[24px] image" />
        <!-- card layout -->
        <!-- <div class="layout"></div> -->
        <div
            class="absolute top-0 p-4 text-center flex flex-column justify-between h-[100%]"
        >
            <div>
                <h2 class="text-5xl text-[#ffffff] pb-2 pt-[15rem]">
                    Farm gardens the valley
                </h2>
                <p class="text-[#F5F5F5] text-xl show1">
                    Offering innovative, institutional-caliber investment
                    expertise and solutions.Offering innovative,
                    institutional-caliber investment expertise and solutions.
                </p>
            </div>
            <div class="flex items-center cursor-pointer">
                <p class="text-xl text-[#ffffff] mr-3 show2">Learn more</p>
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
    </div>
</template>

<script>
export default {
    props: [],
};
</script>

<style scoped>
/* for card animation */
/* show1 show2 for p */
/* main for main div  */
.show1,
.show2 {
    height: 0;
    width: 0;
    opacity: 0;
}
.main:hover h2 {
    animation-name: movee;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}
.main:hover .show1 {
    animation-name: show1;
    animation-delay: 1s;
    animation-duration: 1s;
    animation-fill-mode: forwards;
}
.main:hover .show2 {
    animation-name: show2;
    animation-duration: 1s;
    animation-fill-mode: forwards;
}
@keyframes movee {
    to {
        padding-top: 0;
    }
}
@keyframes show1 {
    from {
        width: 100%;
    }
    to {
        height: 100%;
        width: 100%;
        opacity: 1;
    }
}
@keyframes show2 {
    from {
        width: 36%;
    }
    to {
        height: 100%;
        width: 36%;
        opacity: 1;
    }
}
/* .layout {
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgb(0, 0, 0, 40%);
    top: 0;
    border-radius: 24px;
    transition: 0.3s;
    opacity: 0;
}
.main:hover .layout {
    opacity: 1;
} */
.main:hover .image {
    filter: brightness(0.7);
}
</style>
