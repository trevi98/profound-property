<template>
    <div class="w-full min-h-[100vh] bg-[#f5f5f5]">
        <Header/>
        <Projects/>

        <!-- <FormNavigator/> -->
    </div>
</template>

<script>

import Header from '../../components/dashboard/Header.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../axios';
import Projects from '../../components/dashboard/project/Projects.vue';

// import FormNavigator from '../../components/dashboard/FormNavigator.vue';
export default {
    components:{Header,Projects},
    methods:{
        ...mapMutations(['setNav']),
    },
    data(){
        return{
            areas:null
        }
    },
    mounted(){



    },
    computed:{
        ...mapState(['project']),
    }
}
</script>

<style>

</style>
