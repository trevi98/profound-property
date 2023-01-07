<template>
    <div class="swiper">
        <div class="swiper-wrapper">
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
            <Card class="swiper-slide" />
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</template>
<script src="../../../js/slider.js"></script>

<script src="../../../js/swiper-bundle.min.js">
import "../../../css/swiper-bundle.min"
import Card from "./Card.vue"
export default {
    components:{
        Card
    }

}
</script>

<style></style>
