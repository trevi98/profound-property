<template>
    <div class="flex justify-between pb-6 px-20">
        <h4 class="text-primary-color text-5xl">{{ name }}</h4>
        <router-link :to="{ name: 'home' }">
            <div
                class="flex justify-between border-[#000000] border-[2px] border-solid px-6 py-1 items-center rounded-[10px]"
            >
                <p class="text-[#000000] text-[25px] leading-[38px] pr-6">
                    View all
                </p>
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M14.4302 5.92993L20.5002 11.9999L14.4302 18.0699"
                        stroke="#000000"
                        stroke-width="1.5"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M3.5 12H20.33"
                        stroke="#000000"
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
export default {
    props: ["name"],
};
</script>

<style></style>
