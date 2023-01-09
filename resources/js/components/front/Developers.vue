<template>
    <div
        class="bg-[url(/images/FB_IMG_16.png)] bg-center bg-no-repeat bg-cover relative px-20 mb-20 layout"
    >
        <h1
            class="text-4xl text-[#ffffff] text-center pt-16 font-bold relative"
        >
            Developers
        </h1>
        <div class="flex justify-between items-center pb-10 pt-8 relative">
            <Image img="./images/download1.png" />
            <Image img="./images/download2.png" />
            <Image img="./images/Vector1.png" />
            <Image img="./images/sobha-realty-logo.png" />
            <Image img="./images/download3.png" />
            <Image img="./images/download6.png" />
        </div>
        <router-link :to="{ name: 'home' }">
            <div class="flex items-center justify-center pb-16 relative">
                <p class="text-3xl mr-4 text-[#ffffff]">View all Developers</p>
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M14.4302 5.92993L20.5002 11.9999L14.4302 18.0699"
                        stroke="#ffffff"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M3.5 12H20.33"
                        stroke="#ffffff"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
        </router-link>
    </div>
</template>

<script>
import Image from "./Image.vue";
export default {
    components: {
        Image,
    },
};
</script>

<style scoped>
.layout::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: radial-gradient(
        34.72% 72.08% at 50% 50%,
        rgba(245, 245, 245, 0.06) 0%,
        rgba(109, 133, 138, 0.54) 37.23%,
        rgba(14, 55, 63, 0.42) 92.19%,
        rgba(14, 55, 63, 0.48) 100%
    );
    top: 0;
    left: 0;
}
</style>
>
