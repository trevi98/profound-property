<template>
    <div class="w-[calc(96%/2)]">
        <router-link :to="{ name: 'home' }">
            <div
                class="overflow-hidden rounded-[24px] bg-[rgb(0 54 63 / 40%)] relative layout"
            >
                <img
                    src="../../../assets/project1.jpg"
                    class="transition-[0.4s] m-w-[297px] min-h-[297px]"
                    alt=""
                />
            </div>
        </router-link>
        <p class="text-blac-color text-xl pt-4 pb-1">Farm gardens the valley</p>
        <span class="text-black-color text-xl">Farm gardens</span>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
.layout::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: radial-gradient(
        50.49% 38.62% at 50% 50%,
        rgba(14, 55, 63, 0.08) 0%,
        rgba(93, 120, 125, 0.3) 50.16%,
        rgba(14, 55, 63, 0.32) 100%
    );
    top: 0;
    left: 0;
    border-radius: 24px;
    z-index: 1;
}
.layout:hover img {
    transform: scale(1.2);
}
</style>
