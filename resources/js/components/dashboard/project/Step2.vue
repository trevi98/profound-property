<template>
   <div class="w-full min-h-[100vh] bg-[#f5f5f5]">
        <div class="w-[80%] mx-auto py-[20px]">
            <input type="text" name="" id="" @keyup="filter" v-model="search" placeholder="search" class="border-[2px] w-full border-[#a6a4a4] border-solid p-[10px] h-[30px]">
        </div>
        <div class="min-h-[100vh]">
            <div v-if="areas" class="flex w-[80%] mx-auto justify-center items-center flex-wrap gap-[10px] my-[10px]">
                <div v-for="area in areas" :key="area.id" class="toselect border-[4px] rounded-sm hover:cursor-pointer w-[200px] h-[200px] flex justify-center items-center bg-[#fff]" @click="select" :id="'main-'+area.id">
                    <div :id="area.id" @click.self.stop="selectChiled">

                        {{ area.title }}
                    </div>
                </div>
            </div>

        </div>
        <div class="w-[90%] mx-auto">

            <FormNavigator @nav="nav"/>
        </div>
    </div>

</template>

<script>
    import FormNavigator from '../FormNavigator.vue';
    import { mapMutations,mapState } from 'vuex';
    import { apiBack } from '../../../axios';
export default {
    components: { FormNavigator },
    props:['areasProp'],
    data(){
        return {
            areas: null,
            search:"",
            res:null,
            formData:{
                location_id:null

            }
        }
    },
    methods:{
        ...mapMutations(['setNav','setStep2']),

        initiate(){
            if(this.project.location_id != null){
                this.formData.location_id = this.project.location_id
                this.bindToArea()
            }
        },


        addToState(){
            this.setStep2(this.formData);
        },

        bindToArea(){
            document.querySelectorAll('.toselect').forEach((elmnt)=>{
                elmnt.classList.remove('border-[#0b3841]')
            })
            // console.log(`#main-${this.formData.location_id}`)
            // console.log(document.querySelector(`#main-${this.formData.location_id}`))
            document.querySelector(`#main-${this.formData.location_id}`).classList.add('border-[#0b3841]')
        },


        filter($event){
            // console.log($event.target)
            // console.log(this.search);
            this.areas = this.res.filter((area)=>{
                return area.title.toLowerCase().includes(this.search.toLowerCase())
            })
        },
        select($event){
            document.querySelectorAll('.toselect').forEach((elmnt)=>{
                elmnt.classList.remove('border-[#0b3841]')
            })
            $event.target.classList.add('border-[#0b3841]')
            this.formData.location_id = $event.target.id.substr(5);
        },
        selectChiled($event){
            document.querySelectorAll('.toselect').forEach((elmnt)=>{
                elmnt.classList.remove('border-[#0b3841]')
            })
            $event.target.parentElement.classList.add('border-[#0b3841]');
            this.formData.location_id = $event.target.id;
        },
        nav(val){
            this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'Add project - step 3 | Available units |',
                    current: 'step3',
                    prev: 'step2',
                    next: 'step4'
                 })
            }
            else{
                // this.addToState();
                this.setNav({
                    title: 'Add project - step 1 | Basic info |',
                    current: 'step1',
                    prev: null,
                    next: 'step2'
                 })
            }
        }
    },
    mounted(){
        let myPromise = new Promise((myResolve, myReject) =>{
            // "Producing Code" (May take some time)
            this.res = this.areasProp;
            this.areas = this.areasProp;

            myResolve(); // when successful
            myReject();  // when error
        });
        myPromise.then(()=>{

            this.initiate()
        }).catch((error) => {
            console.log(error)
        })

    },
    computed:{
        ...mapState(['project'])

    }
}
</script>

<style>

</style>
