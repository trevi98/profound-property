<template>
    <router-link :to="{ name: 'home' }">
        <div class="main relative">
            <img
                src="./images/unsplash.png"
                alt=""
                class="rounded-[24px] image"
            />
            <div
                class="absolute top-0 p-4 text-center flex flex-column justify-between h-[100%]"
            >
                <div>
                    <h2
                        class="text-[41px] leading-[62px] text-[#ffffff] pb-4 pt-[15rem]"
                    >
                        Farm gardens the valley
                    </h2>
                    <div class="show1">
                        <p class="text-[#F5F5F5] pb-4 text-2xl text-center">
                            Price: 22000$
                        </p>
                        <p class="text-[#F5F5F5] text-2xl pb-6">
                            Area: 1200 Sq. M.
                        </p>
                        <p class="text-[#F5F5F5] text-base">
                            Offering innovative, institutional-caliber
                            investment expertise and solutions.Offering
                            innovative, institutional-caliber investment
                            expertise and solutions.
                        </p>
                    </div>
                </div>
                <div class="flex items-center">
                    <p class="text-xl text-[#ffffff] mr-3 show2">Learn more</p>
                    <div class="bg-[#ffffffcc] rounded-[50%] p-1 icon">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M14.4302 5.92993L20.5002 11.9999L14.4302 18.0699"
                                stroke="#0E373F"
                                stroke-width="1.5"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M3.5 12H20.33"
                                stroke="#0E373F"
                                stroke-width="1.5"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {};
</script>

<style scoped>
/* for card animation */
/* show1 show2 for animation  */
/* main for main div  */
.show1,
.show2 {
    height: 0;
    width: 0;
    opacity: 0;
}
.main:hover h2 {
    animation-name: movee;
    animation-duration: 0.3s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}
.main:hover .show1 {
    animation-name: show1;
    animation-delay: 0.3s;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}
.main:hover .show2 {
    animation-name: show2;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}
.main:hover .icon {
    background-color: transparent;
}
.main:hover svg {
    color: #f5f5f5;
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
.main::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgb(0 54 63 / 60%);
    border-radius: 24px;
    top: 0;
    left: 0;
    opacity: 0;
}
@keyframes opa {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0.4;
    }
    80% {
        opacity: 0.8;
    }
    100% {
        opacity: 100%;
    }
}
.main:hover::before {
    animation-name: opa;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}
</style>
