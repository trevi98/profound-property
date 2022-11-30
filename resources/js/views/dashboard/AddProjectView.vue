<template>
    <div class="w-full min-h-[100vh] bg-[#f5f5f5]">
        <Header/>
        <div class="text-2xl text-center mt-[20px]">{{ $store.state.Nav.title }}</div>
        <Step1 v-if="$store.state.Nav.current =='step1'"/>
        <Step2 v-else-if="$store.state.Nav.current == 'step2'"/>
        <Step3 v-else-if="$store.state.Nav.current == 'step3'"/>

        <!-- <FormNavigator/> -->
    </div>
</template>

<script>
import Step1 from '../../components/dashboard/project/Step1.vue';
import Step2 from '../../components/dashboard/project/Step2.vue';
import Step3 from '../../components/dashboard/project/Step3.vue';
import Header from '../../components/dashboard/Header.vue';
import { mapMutations } from 'vuex';

// import FormNavigator from '../../components/dashboard/FormNavigator.vue';
export default {
    components:{Step1,Step2,Step3,Header},
    methods:{
        ...mapMutations(['setNav']),
    },
    mounted(){
        this.setNav({
            title: 'Add project - step 1 | basic info |',
            current: 'step1',
            prev: null,
            next: 'step2'
        })
    }
}
</script>

<style>

</style>
