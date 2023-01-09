<template>
    <div class="relative">
        <!-- <img src="./images/1.png" alt="" class="absolute top-[-80px]" />
        <img src="./images/background2.png" alt="" class="absolute" /> -->
        <!-- <img src="./images/background3.png" alt="" class="img" />
        <img src="./images/background4.png" alt="" class="img" /> -->

        <div>
            <ViewAll name="Offplan Latest Launches" />
            <!-- <div class="flex justify-between pb-20">
                 <Card />
            <Card />
            <Card />
            </div> -->
            <Slide />
            <ViewAll name="Water Front" />
            <div class="px-20">
                <CardImage />
                <CardImage />
                <CardImage />
            </div>
            <router-link :to="{ name: 'home' }">
                <div class="flex items-center justify-center pt-6 pb-20">
                    <p class="text-[ #212121] text-3xl mr-4">
                        View all Waterfront
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
                            stroke="#424242"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M3.5 12H20.33"
                            stroke="#424242"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>
            </router-link>
            <ViewAll name="Buying Property in Dubai" />
            <!-- <div class="flex justify-between pb-20">
            <Card />
            <Card />
            <Card />
        </div> -->
            <Slide />

            <ViewAll name="Renting a Property in Dubai" />
            <!-- <div class="flex justify-between pb-20">
            <Card />
            <Card />
            <Card />
        </div> -->
            <Slide />
        </div>
    </div>
</template>

<script>
import ViewAll from "./ViewAll.vue";
import Card from "./Card.vue";
import CardImage from "./CardImage.vue";
import Slide from "./Slide.vue";

export default {
    components: { ViewAll, Card, CardImage, Slide },
};
</script>

<style scoped></style>
