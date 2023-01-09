<template>
    <div class="relative pb-20">
        <div class="flex relative justify-between gab-[31px] w-[100%] px-16">
            <Card />
            <Card />
            <Card />
        </div>
        <div class="flex absolute w-[100%] top-[calc(50%-(97.6px/2))]">
            <div
                class="bg-primary-color rounded-[50%] absolute right-[95%] mr-2 shadow-[0px_4px_4px_rgba(0, 0, 0, 0.25)] border-[0.5px] border-[#757575] border-solid p-[12.8px] cursor-pointer"
            >
                <svg
                    width="38.4"
                    height="38.4"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M19.1401 11.8601L7.00014 24.0001L19.1401 36.1401"
                        stroke="#ffffff"
                        stroke-width="3"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M41 24H7.34"
                        stroke="#ffffff"
                        stroke-width="3"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
            <div
                class="bg-primary-color rounded-[50%] absolute left-[95%] ml-2 m shadow-[0px_4px_4px_rgba(0, 0, 0, 0.25)] border-[0.5px] border-[#757575] border-solid p-[12.8px] cursor-pointer"
            >
                <svg
                    width="38.4"
                    height="38.4"
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
        </div>
    </div>
</template>

<script>
import Card from "./Card.vue";
export default {
    components: {
        Card,
    },
};
</script>

<style></style>
