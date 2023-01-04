<template>
    <div class="bg-[#424242] rounded-[24px] p-4 text-center">
        <h2 class="text-5xl text-[#ffffff]">Farm gardens the valley</h2>
        <slot></slot>
        <div class="flex items-center">
            <p v-if="show" class="text-xl text-[#ffffff] mr-3">Learn more</p>
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
</template>

<script>
export default {
    props: ["show"],
};
</script>

<style></style>
