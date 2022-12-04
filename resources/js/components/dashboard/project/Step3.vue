<template>
    <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
        <div class="flex flex-col justify-center items-center gap-[80px] py-[20px]">

            <div v-if="project.availableUnites">
                <div v-for="unit in project.availableUnites" :key="unit">
                    <div>

                        {{ types[unit] }}
                    </div>
                    <div class="flex flex-col justify-center items-start gap-[15px] w-full">
                        <label for="bedrooms" class="w-[80%] mx-auto">Bedrooms: </label>
                        <select v-model="formData.bedrooms[unit]" name="developers" id=""  class="p-[10px] border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto">
                            <option value="0" >Studio </option>

                            <option v-for="bedroom in bedrooms" :key="bedroom.val" :value="bedroom.val">{{ bedroom.title }}</option>
                        </select>
                    </div>
                    <UploadeFile @uploaded="uploadedPlans($event,unit)" label="Floor plans" name="file" path="/upload_file" :allowed="allowedFiles" :added="project.plansArray.includes(unit) ? true : false"/>
                    <UploadeFile @uploaded="uploaded3d($event,unit)" label="3D file" name="file" path="/upload_file" :allowed="allowedFiles" :added="project.plans3dArray.includes(unit) ? true : false"/>
                    <hr class="my-[10px]">

                </div>
            </div>




        </div>
        <FormNavigator @nav="nav" />
    </div>
</template>

<script>

import FormNavigator from '../FormNavigator.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../../axios';
import UploadeFile from '../UploadeFile.vue';




export default {
    components:{FormNavigator,UploadeFile },
    data(){
        return {
            allowedImages : ['jpg','jpeg','png','svg'],
            allowedFiles : ['jpg','jpeg','png','svg','pdf'],
            uniteTitle:{},
            types:{},
            bedrooms:[
                {'val':1, 'title' : '1 bedroom'},
                {'val':2, 'title' : '2 bedrooms'},
                {'val':3, 'title' : '3 bedrooms'},
                {'val':4, 'title' : '4 bedrooms'},
                {'val':5, 'title' : '5 bedrooms'},
                {'val':6, 'title' : '6 bedrooms'},
                {'val':7, 'title' : '7 bedrooms'},
                {'val':8, 'title' : '8 bedrooms'},
                {'val':9, 'title' : '9 bedrooms'},
                {'val':10, 'title' : '10 bedrooms'},
                {'val':11, 'title' : '11 bedrooms'},
                {'val':12, 'title' : '12 bedrooms'},
            ]
            ,
            formData:{
                bedrooms:{},
                plans:{},
                plans3d:{},
                plansArray:[],
                plans3dArray:[]
            }
        }
    },
    methods:{
        ...mapMutations(['setNav','setStep3']),

        request(path,val){
            apiBack.get(path)
            .then((response) => {
                response.data.payload.forEach(type=>{

                    this[val][type.id] = type.title;
                })
            })
            .catch((error) => {
                console.log(error);
            });
        },

        initiate(){
            this.formData.bedrooms = this.project.bedrooms;
            if(this.project.plansArray.length > 0){
                this.formData.plansArray = this.project.plansArray;
                this.formData.plans = this.project.floorPlans;
            }
            if(this.project.plans3dArray.length > 0){
                this.formData.plans3dArray = this.project.plans3dArray;
                this.formData.plans3d = this.project.floor3ds;
            }
        },

        addToState(){
            // console.log('d')
           this.setStep3(this.formData)
        },

        uploadedPlans($event,unit){
            // console.log($event,unit)
            this.formData.plans[unit] = $event;
            this.formData.plansArray.push(unit)
        },

        uploaded3d($event,unit){
            // console.log($event,unit)
            this.formData.plans3d[unit] = $event;
            this.formData.plans3dArray.push(unit);
        },

        nav(val){
            this.addToState();
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
    // updated(val){
    //     // console.log(this.formData.bedrooms);
    //     console.log(val)
    // },
    computed:{
        ...mapState(['project'])

    },
    mounted(){
        this.request('/types','types');
        this.initiate();
        // this.initiate()

    },

}
</script>

<style>

</style>
