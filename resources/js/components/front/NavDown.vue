<template>
    <div
        class="flex items-center hover:cursor-pointer hover:text-[#ffffff] py-4"
    >
        <p class="mr-2 text-xl text-[#ffffff]">
            {{ name }}
        </p>
        <svg
            width="18"
            height="9"
            viewBox="0 0 18 9"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M16.92 0.950001L10.4 7.47C9.63002 8.24 8.37002 8.24 7.60002 7.47L1.08002 0.950001"
                stroke="#ffffff"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: ["name"],
};
</script>

<style></style>
