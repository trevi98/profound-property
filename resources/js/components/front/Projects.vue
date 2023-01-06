<template>
    <div
        class="project_down absolute top-[5%] left-[80px] w-[calc(100%-160px)] bg-[#ffffff] py-3 px-5 transition-[2s] slide-bottom rounded-[10px] hover:cursor-context-menu z-[1]"
    >
        <div class="flex m-w-[800px] justify-between py-12">
            <CardProject class="one" />
            <CardProject class="two" />
            <CardProject class="three" />
        </div>
        <div
            class="mt-2 text-2xl text-[#ffffff] bg-[#757575] py-3 px-6 text-center rounded-[10px] w-fit m-auto mb-5 hover:cursor-pointer"
        >
            View all areas
        </div>
    </div>
</template>

<script>
import CardProject from "./CardProject.vue";
export default {
    components: { CardProject },
};
</script>

<style>
.project_down {
    display: none;
    opacity: 0;
}
/* .one:hover {
    transform: scaleX(1.2);
}
.two:hover {
    transform: scaleX(1.2);
}
.three:hover {
    transform: scaleX(1.2);
}
.one:hover .two,
.one:hover .three {
    transform: scaleX(0.8);
}
.two:hover .one,
.two:hover .three {
    transform: scaleX(0.8);
}
.three:hover .two,
.three:hover .one {
    transform: scaleX(0.8);
} */
</style>
