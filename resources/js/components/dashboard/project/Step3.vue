<template>
    <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
        <form action="" class="flex flex-col justify-center items-center gap-[80px] py-[20px]">

            <div v-if="project.availableUnites">
                <div v-for="unit in project.availableUnites" :key="unit">
                    {{ unit }}
                </div>
            </div>


            <div class="flex flex-col justify-center items-start gap-[15px] w-full">
                <label for="developers" class="w-[80%] mx-auto">Developer: </label>
                <select v-model="formData.developer_id" name="developers" id="" v-if="developers" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto">
                    <option value="none" selected disabled>Select a developer</option>

                    <option v-for="developer in developers" :key="developer.id" :value="developer.id">{{ developer.title }}</option>
                </select>
            </div>


        </form>
        <FormNavigator @nav="nav" />
    </div>
</template>

<script>
import FormNavigator from '../FormNavigator.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../../axios';



export default {
    components:{FormNavigator },
    data(){
        return {
            uniteTitle:{}
        }
    },
    methods:{
        ...mapMutations(['setNav','setStep3']),

        request(path,val){
            apiBack.get(path)
            .then((response) => {
                this[val] = response.data.payload;
            })
            .catch((error) => {
                console.log(error);
            });
        },

        nav(val){
            // this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'Add project - step 4 | Upload images |',
                    current: 'step4',
                    prev: 'step3',
                    next: null
                })
            }
            else{
                // this.addToState();
                this.setNav({
                    title: 'Add project - step 2 | Select area |',
                    current: 'step2',
                    prev: 'step1',
                    next: 'step3'
                })
            }
        }
    },
    computed:{
        ...mapState(['project'])

    },
    mounted(){
        // this.request('','')
        this.initiate()

    },

}
</script>

<style>

</style>
