<template>
    <div class="w-[calc(96%/2)]">
        <router-link :to="{ name: 'home' }">
            <div
                class="overflow-hidden rounded-[24px] bg-[rgb(0 54 63 / 40%)] relative layout"
            >
                <img
                    src="../../../assets/project1.jpg"
                    class="transition-[0.3s] m-w-[297px] min-h-[297px]"
                    alt=""
                />
            </div>
        </router-link>
        <p class="text-[#424242] text-xl pt-4 pb-1">Farm gardens the valley</p>
        <span class="text-[#9E9E9E] text-xl">Farm gardens</span>
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
    background: rgb(0 54 63 / 40%);
    top: 0;
    left: 0;
    border-radius: 24px;
    z-index: 1;
}
.layout:hover img {
    transform: scale(1.1);
}
</style>
