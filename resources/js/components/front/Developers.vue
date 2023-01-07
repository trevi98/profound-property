<template>
    <div
        class="bg-[url(/images/FB_IMG_16.png)] bg-center bg-no-repeat bg-cover relative px-20 mb-20 layout"
    >
        <!-- <img src="./images/FB_IMG_16.png" alt="" /> -->
        <h1
            class="text-4xl text-[#ffffff] text-center pt-16 font-bold relative"
        >
            Developers
        </h1>
        <div class="flex justify-center items-center pb-10 pt-8 relative">
            <div
                class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] hover:cursor-pointer"
            >
                <img src="./images/download1.png" alt="" />
            </div>
            <div
                class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] ml-8 hover:cursor-pointer"
            >
                <img src="./images/download2.png" alt="" />
            </div>
            <div
                class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] ml-8 hover:cursor-pointer"
            >
                <img src="./images/Vector1.png" alt="" />
            </div>
            <div
                class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] ml-8 hover:cursor-pointer"
            >
                <img src="./images/sobha-realty-logo.png" alt="" />
            </div>
            <div
                class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] ml-8 hover:cursor-pointer"
            >
                <img src="./images/download3.png" alt="" />
            </div>
            <div
                class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] ml-8 hover:cursor-pointer"
            >
                <img src="./images/download6.png" alt="" />
            </div>
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
export default {};
</script>

<style scoped>
.layout::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgb(0 54 63 / 90%);
    top: 0;
    left: 0;
}
p {
}
</style>
>
