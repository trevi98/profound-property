<template>
    <div class="flex justify-between">
        <select
            :name="name"
            id=""
            class="bg-[#D9D9D9] rounded-[10px] p-2 grow cursor-pointer outline-none"
        >
            <option class="mr-2 text-sm text-[#0E373F]" value="">
                {{ name }}
            </option>
            <slot></slot>
        </select>
    </div>
</template>

<script>
export default {
    props: ["name"],
};
</script>

<style></style>
