<template>
    <div class="w-full min-h-[100vh] bg-[#f5f5f5]">
        <Header/>
        <div class="text-2xl text-center mt-[20px]">{{ $store.state.Nav.title }}</div>
        <Step1 v-if="$store.state.Nav.current =='step1'"/>
        <Step2 v-else-if="$store.state.Nav.current == 'step2'" :areasProp="areas"/>
        <Step3 v-else-if="$store.state.Nav.current == 'step3'"/>
        <Step4 v-else-if="$store.state.Nav.current == 'step4'"/>
        <Step5 v-else-if="$store.state.Nav.current == 'step5'" :installments="project.installments" />

        <!-- <FormNavigator/> -->
    </div>
</template>

<script>
import Step1 from '../../components/dashboard/project/Step1.vue';
import Step2 from '../../components/dashboard/project/Step2.vue';
import Step3 from '../../components/dashboard/project/Step3.vue';
import Step4 from '../../components/dashboard/project/Step4.vue';
import Step5 from '../../components/dashboard/project/Step5.vue';
import Header from '../../components/dashboard/Header.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../axios';

// import FormNavigator from '../../components/dashboard/FormNavigator.vue';
export default {
    components:{Step1,Step2,Step3,Step4,Step5,Header},
    methods:{
        ...mapMutations(['setNav','setProjectState']),
    },
    data(){
        return{
            areas:null
        }
    },
    mounted(){




        apiBack.get('/locations')
        .then((response) => {
            // handle success
           this.areas = response.data.payload
        })
        .catch((error) => {
            // handle error
            console.log(error);
        })

        // apiBack.get(`/get-project-recored?project_id=${this.$route.params.id}`)
        // .then((response) => {
        //     // handle success
        //    this.setProjectState(response.data.payload)
        //    console.log(response.data)
        // })
        // .catch((error) => {
        //     // handle error
        //     console.log(error);
        // })

    },
    created(){
        apiBack.get(`/get-project-recored?project_id=${this.$route.params.id}`)
        .then((response) => {
            // handle success
           this.setProjectState(response.data.payload)
           console.log(response.data)
           this.setNav({
            title: 'Add project - step 1 | basic info |',
            current: 'step1',
            prev: null,
            next: 'step2'
        });

        })
        .catch((error) => {
            // handle error
            console.log(error);
        })
    },
    computed:{
        ...mapState(['project']),
    }
}
</script>

<style>

</style>
