<template>
    <HeaderUi />
    <HomePage />
    <Footer />
</template>

<script>
import HeaderUi from "../components/front//HeaderUi.vue";
import HomePage from "../components/front/HomePage.vue";
import Footer from "../components/front/Footer.vue";
export default {
    components: {
        HeaderUi,
        HomePage,
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
