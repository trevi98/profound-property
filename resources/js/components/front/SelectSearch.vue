<template>
    <div class="flex flex-column relative">
        <div
            class="absolute w-[100%] top-[100%] z-[1] bg-[#d9d9d9] text-primary-color w-100% transition-all duration-[400ms] rounded-[10px] order-1 shadow-primary options-container"
            :class="
                state
                    ? 'overflow-y-scroll opacity-100 max-h-[240px] '
                    : 'overflow-hidden opacity-0 max-h-[0px]'
            "
        >
            <div>
                <slot></slot>
            </div>
        </div>
        <div
            class="bg-[#D9D9D9] text-primary-color rounded-[10px] mb-2 cursor-pointer py-3 px-6"
            @click="toggleActive"
        >
            {{ name }}
        </div>
    </div>
</template>

<script>
export default {
    props: ["name", "state"],
    data() {
        return {};
    },
    methods: {
        toggleActive() {
            this.$emit("toggle");
        },
    },
};
</script>

<style scoped>
.options-container::-webkit-scrollbar {
    width: 8px;
    background: #0e373f;
    border-radius: 0 8px 8px 0;
}
.options-container::-webkit-scrollbar-thumb {
    background: #ffffff;
    border-radius: 0 8px 8px 0;
}
/* <select
             :name="name"
             id=""
             class="bg-[] rounded-[10px] p-2 grow cursor-pointer outline-none"
         >
             <option class="mr-2 text-sm text-[#0E373F]" value="">
                 {{ name }}
             </option>
             <slot></slot>
         </select> */
</style>
