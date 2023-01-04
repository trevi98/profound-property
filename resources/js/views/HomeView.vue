<template>
    <HeaderUi />
    <Landing />
    <Luxury />
    <Popular />
    <Developers />
    <Media />
    <Footer />
</template>

<script>
import HeaderUi from "../components/front//HeaderUi.vue";
import Landing from "../components/front/Landing.vue";
import Luxury from "../components/front/Luxury.vue";
import Popular from "../components/front/Popular.vue";
import Developers from "../components/front/Developers.vue";
import Media from "../components/front/Media.vue";
import Footer from "../components/front/Footer.vue";
export default {
    components: {
        HeaderUi,
        Landing,
        Luxury,
        Popular,
        Developers,
        Media,
        Footer,
    },
};
</script>

<style>
body {
    background-color: #fff;
    font-family: "Poppins";
}
</style>
