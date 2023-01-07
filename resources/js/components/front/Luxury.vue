<template>
    <div class="bg-[url(/images/Luxury.png)] mb-20 relative layout">
        <div
            class="pt-24 flex items-center justify-end flex-col text-[#ffffff] relative pl-[40rem]"
        >
            <h2
                class="text-5xl tracking-[-0.005em] border-b-4 border-[#ffffff] border-solid p-3 mb-4"
            >
                Luxury
            </h2>

            <p class="text-3xl pb-10">Find Homes & Luxury properties</p>
            <router-link :to="{ name: 'home' }" class="hover:text-[#ffffff]">
                <div class="flex items-center pb-10">
                    <p class="text-3xl mr-4 underline">Discover Luxury</p>
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
    background: rgb(0 54 63 / 40%);
    top: 0;
}
</style>
