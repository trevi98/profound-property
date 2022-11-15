<template>
    <div class="text-[#f00]">
        {{message}}
    </div>
    <router-link :to="{name:'xx'}">Go to Foo</router-link>
    <router-view/>

</template>
<script>
export default {
    data() {
        return {
            message: 'Hello World'
        }
    }
};
</script>
