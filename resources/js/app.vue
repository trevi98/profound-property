<template>
    <Header/>
    <!-- <router-link :to="{name:'xx'}">Go to Foo</router-link> -->
    <router-view/>

</template>
<script>
import Header from './components/Header.vue';
export default {
    components:{Header},
    data() {
        return {
            message: 'Hello World'
        }
    }
};
</script>
