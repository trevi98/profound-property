<template>
    <div
        class="bg-[#ffffff] rounded-[50%] flex items-center justify-center w-[188px] h-[180px] hover:cursor-pointer"
    >
        <img :src="img" alt="" />
    </div>
</template>

<script>
export default {
    props: ["img"],
};
</script>

<style></style>
