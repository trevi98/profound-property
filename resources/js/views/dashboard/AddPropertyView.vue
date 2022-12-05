<template>
    <div class="w-full min-h-[100vh] bg-[#f5f5f5]">
        <Header/>
        <div class="text-2xl text-center mt-[20px]">{{ $store.state.Nav.title }}</div>
        <Step1 v-if="$store.state.Nav.current =='step1'"/>
        <Step2 v-else-if="$store.state.Nav.current == 'step2'" :areasProp="areas"/>
        <Step3 v-else-if="$store.state.Nav.current == 'step3'"/>

        <!-- <FormNavigator/> -->
    </div>
</template>

<script>
import Step1 from '../../components/dashboard/property/Step1.vue';
import Step2 from '../../components/dashboard/property/Step2.vue';
import Step3 from '../../components/dashboard/property/Step3.vue';
import Header from '../../components/dashboard/Header.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../axios';

// import FormNavigator from '../../components/dashboard/FormNavigator.vue';
export default {
    components:{Step1,Step2,Step3,Header},
    methods:{
        ...mapMutations(['setNav']),
    },
    data(){
        return{
            areas:null
        }
    },
    mounted(){
        this.setNav({
            title: 'Add property - step 1 | basic info |',
            current: 'step1',
            prev: null,
            next: 'step2'
        });



        apiBack.get('/locations')
        .then((response) => {
            // handle success
           this.areas = response.data.payload
        })
        .catch((error) => {
            // handle error
            console.log(error);
        })


    },
    computed:{
        ...mapState(['property']),
    }
}
</script>

<style>

</style>
