<template>
    <div
        class="h-[80vh] bg-center bg-cover relative"
        id="mbg"
        ref="mbg"
        :style="{ backgroundImage: 'url(/images/' + image + ')' }"
    >
        <MainSlider :featuredProjects="featuredProjects" />
        <Nav>
            <template v-slot:logo>
                <img src="/images/w-logo.png" alt="" class="max-w-[250px]" />
            </template>
            <template v-if="types" v-slot:links>
                <router-link :to="{ name: 'home' }"> Buy </router-link>
                <router-link :to="{ name: 'home' }"> Rent </router-link>
                <template v-for="type in types" :key="type.id">
                    <router-link :to="{ name: 'home' }">
                        {{ type.title }}
                    </router-link>
                </template>
                <router-link :to="{ name: 'home' }"> Off plan </router-link>
            </template>
            <template v-slot:account>
                <div
                    class="w-[30px] h-[30px] rounded-[50%] bg-[rgba(50,50,50,0.5)] flex justify-center items-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        width="24"
                        stroke="white"
                    >
                        <path
                            d="m12 19.25-.55-.5q-2.425-2.225-4.012-3.8-1.588-1.575-2.5-2.762Q4.025 11 3.663 10.05 3.3 9.1 3.3 8.15q0-1.775 1.213-2.988Q5.725 3.95 7.5 3.95q1.325 0 2.475.712 1.15.713 2.025 2.088.875-1.375 2.025-2.088 1.15-.712 2.475-.712 1.775 0 2.988 1.212Q20.7 6.375 20.7 8.15q0 .95-.362 1.9-.363.95-1.276 2.138-.912 1.187-2.487 2.762-1.575 1.575-4.025 3.8Zm0-.95q2.4-2.175 3.95-3.725 1.55-1.55 2.45-2.688.9-1.137 1.25-2.012T20 8.15q0-1.5-1-2.5t-2.5-1q-1.2 0-2.212.687-1.013.688-1.938 2.163h-.7Q10.7 6 9.7 5.325q-1-.675-2.2-.675-1.475 0-2.487 1Q4 6.65 4 8.15q0 .85.35 1.725.35.875 1.25 2.012.9 1.138 2.45 2.675Q9.6 16.1 12 18.3Zm0-6.825Z"
                        />
                    </svg>
                </div>
            </template>
        </Nav>
    </div>
</template>

<script>
import { apiFront } from "../axios.js";
import Nav from "./Nav.vue";
import MainSlider from "./MainSlider.vue";
let counter = 0;
export default {
    components: { Nav, MainSlider },
    data() {
        return {
            types: null,
            featuredProjects: null,
            image: "project1.jpg",
        };
    },
    mounted() {
        // console.log(this.$refs.mbg)
        apiFront
            .get("/types-for-nav")
            .then((response) => {
                // handle success
                console.log(response.data);
                this.types = response.data.payload;
            })
            .catch((error) => {
                // handle error
                console.log(error);
            });

        apiFront
            .get("/projects/featured")
            .then((response) => {
                // handle success
                console.log(response.data);
                this.featuredProjects = response.data.payload;
            })
            .catch((error) => {
                // handle error
                console.log(error);
            });
    },
};
</script>

<style></style>
