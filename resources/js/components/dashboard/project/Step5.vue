<template>
<div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
    <form action="" class="flex flex-col justify-center items-center gap-[80px] py-[20px]">
        <div v-if="installments" class="flex flex-col">

                <div class="flex justify-center items-start gap-[15px] w-full" v-for="(e, i) in installments" :key="i">
                    <div>

                        <label for="title" class="w-[80%] mx-auto">Title:</label>
                        <input type="text"  :id="`title${i}`" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]" v-model="formData.titles[i]">
                    </div>
                    <div>
                        <label for="percentage" class="w-[80%] mx-auto">Percentage:</label>
                        <input type="text"  :id="`value${i}`" name="percentage" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]" v-model="formData.precentages[i]" >
                    </div>
                </div>
        </div>


    </form>
    <FormNavigator @nav="nav" :submit="true" />
  </div>
</template>

<script>
import FormNavigator from '../FormNavigator.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../../axios';
export default {
    components:{FormNavigator },
    props:['installments','path'],
    data(){
        return {
            formData:{
                titles:new Array(this.installments),
                precentages:new Array(this.installments),
            }
        }
    },
    methods:{
        ...mapMutations(['setNav','setStep5']),


        addToState(){
            // console.log('d')
            let payments = [];
            for(let i=0;i<this.formData.titles.length ; i++){
                if(this.formData.titles[i] != null && this.formData.precentages[i] != null){
                    payments.push({
                        title: this.formData.titles[i],
                        precentages: this.formData.precentages[i]
                    })
                }
            }
            console.log(payments)
           this.setStep5({paymenPlans:payments})
        },

        initiate(){
            if(this.project.installments && this.project.paymenPlans && this.project.paymenPlans.length>0){
                // let titleElmnts = document.querySelectorAll()
                for (let i=0;i<this.project.installments;i++){
                    if(this.project.paymenPlans.length <= i){
                        break;
                    }
                    this.formData.titles[i] = this.project.paymenPlans[i].title
                    this.formData.precentages[i] = this.project.paymenPlans[i].precentages
                    document.querySelector(`#title${i}`).value = this.project.paymenPlans[i].title
                    document.querySelector(`#value${i}`).value = this.project.paymenPlans[i].precentages
                }
            }
        },


        nav(val){
            this.addToState();
            if(val == 'next'){
                // alert('d')
                //////////
                let path = "/create_project";
                if(this.path != null ){
                    path  = this.path
                }
                apiBack.post( path,
                    this.project,
                    ).then((res)=>{
                        console.log(res.data)
                    })
                    .catch((err)=>{
                        // alert(res)
                    console.log(err);
                });

                //////////

                this.setNav({
                    title: 'Add project - step 1 | basic info |',
                    current: 'step1',
                    prev: null,
                    next: 'step2'
                 })

            }
            else{
                // this.addToState();
                this.setNav({
                    title: 'Add project - step 4 | Upload images |',
                    current: 'step4',
                    prev: 'step3',
                    next: 'step5'
                 })
            }
        }
    },
    computed:{
        ...mapState(['project'])
    },
    mounted(){
        this.initiate()
        // for(let i=0 ; i<this.installments ; i++ ){
        //     this.payments.push({title:'',value:null})
        // }
    }


}
</script>

<style>

</style>
