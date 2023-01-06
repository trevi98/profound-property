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

<script src="../../../js/swiper-bundle.min.js">
import "../../../css/swiper-bundle.min"
import Card from "./Card.vue"
export default {
    components:{
        Card
    }

}
   var swiper = new Swiper(".main", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>

<style></style>
