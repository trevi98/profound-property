<template>
   <div class="w-full min-h-[100vh] bg-[#f5f5f5]">
        <div class="w-[80%] mx-auto py-[20px]">
            <input type="text" name="" id="" @keyup="filter" v-model="search" placeholder="search" class="border-b-[1px] border-[#a6a4a4] border-solid">
        </div>
        <div v-if="areas" class="flex w-[80%] mx-auto justify-center items-center flex-wrap gap-[10px] my-[10px]">
            <div v-for="area in areas" :key="area.id" class="toselect border-[2px]  hover:cursor-pointer w-[200px] h-[200px] flex justify-center items-center bg-[#fff]" @click="select" :id="'main-'+area.id">
                <div :id="area.id" @click.self.stop="selectChiled">

                    {{ area.title }}
                </div>
            </div>
        </div>
    </div>

   <FormNavigator @nav="nav"/>
</template>

<script>
    import FormNavigator from '../FormNavigator.vue';
    import { mapMutations,mapState } from 'vuex';
    import { apiBack } from '../../../axios';
export default {
    components: { FormNavigator },
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
                elmnt.classList.remove('border-[#000]')
            })
            // console.log(`#main-${this.formData.location_id}`)
            // console.log(document.querySelector(`#main-${this.formData.location_id}`))
            document.querySelector(`#main-${this.formData.location_id}`).classList.add('border-[#000]')
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
                elmnt.classList.remove('border-[#000]')
            })
            $event.target.classList.add('border-[#000]')
            this.formData.location_id = $event.target.id.substr(5);
        },
        selectChiled($event){
            document.querySelectorAll('.toselect').forEach((elmnt)=>{
                elmnt.classList.remove('border-[#000]')
            })
            $event.target.parentElement.classList.add('border-[#000]');
            this.formData.location_id = $event.target.id;
        },
        nav(val){
            this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'Add project - step 3 | upload images and files |',
                    current: 'step3',
                    prev: 'step2',
                    next: 'step4'
                 })
            }
            else{
                // this.addToState();
                this.setNav({
                    title: 'Add project - step 1 | basic info |',
                    current: 'step1',
                    prev: null,
                    next: 'step2'
                 })
            }
        }
    },
    mounted(){
        apiBack.get('/locations')
        .then((response) => {
            // handle success
            // console.log(response.data);
            this.res = response.data.payload;
            this.areas = response.data.payload;
            this.initiate()
        })
        .catch((error) => {
            // handle error
            console.log(error);
        })

    },
    computed:{
        ...mapState(['project'])

    }
}
</script>

<style>

</style>
