<template>
    <div
        class="down absolute top-[5%] left-[80px] w-[calc(100%-160px)] bg-[#ffffff] py-3 px-5 transition-[2s] slide-bottom rounded-[10px] hover:cursor-context-menu z-[1]"
    >
        <div class="flex items-center justify-between flex-wrap">
            <CardArea />
            <CardArea />
            <CardArea />
            <CardArea />
            <CardArea />
            <CardArea />
            <CardArea />
            <CardArea />
        </div>
        <div
            class="mt-2 text-2xl text-[#ffffff] bg-[#757575] py-3 px-6 text-center rounded-[10px] w-fit m-auto mb-5 hover:cursor-pointer"
        >
            View all areas
        </div>
    </div>
</template>

<script>
import CardArea from "./CardArea.vue";
export default {
    components: { CardArea },
};
</script>

<style>
.slide-bottom {
    -webkit-animation: slide-bottom 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)
        both;
    animation: slide-bottom 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}
@-webkit-keyframes slide-bottom {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        -webkit-transform: translateY(100px);
        transform: translateY(100px);
    }
}
@keyframes slide-bottom {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        -webkit-transform: translateY(100px);
        transform: translateY(100px);
    }
}
.down {
    display: none;
}
</style>
