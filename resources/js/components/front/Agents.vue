<template>
    <div class="px-20 pb-32">
        <h2
            class="text-[41px] leading-[62px] pb-8 text-primary-color text-center text-bold"
        >
            Agents
        </h2>
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

<style></style>
