<template>
    <div class="flex justify-between items-center w-[90%] mx-auto h-[100px] text-[#fff]">
        <div class="w-full">
            <slot name="logo"></slot>
        </div>
        <div class="flex justify-evenly w-full">
            <slot name="links"></slot>
        </div>
        <div class="flex justify-evenly w-full">
            <slot name="account">
                <div class="max-w-[150px] h-[25px] bg-[#ccc] flex gap-[5px]">
                    <router-link :to="{name:'home'}">
                        Login
                    </router-link>
                    <div>/</div>
                    <router-link :to="{name:'home'}">
                        Register
                    </router-link>
                </div>
            </slot>
        </div>
    </div>
</template>

<script>
export default{
    name:'Nav',
    components:{}
}
</script>
