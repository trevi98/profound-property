<template>
  <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
    <form action="" class="flex flex-col justify-center items-center gap-[80px] py-[20px]">
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="title" class="w-[80%] mx-auto">Title:</label>
            <input type="text" v-model="formData.title" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="location_link" class="w-[80%] mx-auto">Location link:</label>
            <input type="text" v-model="formData.locationLink" name="location_link" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="description" class="w-[80%] mx-auto">Description:</label>
            <textarea  name="description" v-model="formData.description" class="h-[140px] border-[1px] border-[#a09999d8] bg-[#fff] border-solid w-[80%] mx-auto"></textarea>
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="price" class="w-[80%] mx-auto">Starting price:</label>
            <input type="number" name="price" v-model="formData.price" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="bathrooms" class="w-[80%] mx-auto">Bathrooms:</label>
            <input type="number" name="bathrooms" v-model="formData.bathrooms" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="area" class="w-[80%] mx-auto">Area:</label>
            <input type="number" name="area" v-model="formData.area" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="number_of_unites_available" class="w-[80%] mx-auto">Number of unites available:</label>
            <input type="number" name="number_of_unites_available" v-model="formData.number_of_unites_available" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="stores" class="w-[80%] mx-auto">Number of stores:</label>
            <input type="number" name="stores" v-model="formData.stores" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="appartments" class="w-[80%] mx-auto">Number of appartments in store:</label>
            <input type="number" name="appartments" v-model="formData.appartments_in_store" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="appartments" class="w-[80%] mx-auto">How many payment installments? </label>
            <input type="number" name="appartments" v-model="formData.installments" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="dld" class="w-[80%] mx-auto">Dld waver:</label>
            <textarea name="dld" v-model="formData.dld" class="h-[140px] border-[1px] border-[#a09999d8] bg-[#fff] border-solid w-[80%] mx-auto"></textarea>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="starting_date" class="w-[80%] mx-auto">Starting date:</label>
            <input type="date" name="starting_date"  v-model="formData.starting_date" class="border-[1px] border-[#a09999d8] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="completion_date" class="w-[80%] mx-auto">Completion date:</label>
            <input type="date" name="completion_date" v-model="formData.completion_date" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>

        <div class="flex justify-start items-center gap-[20px] w-[80%] mx-auto">
            <label for="feature" class="">Feature this project? </label>
            <input type="checkbox" v-model="formData.featured" name="feature" class=" p-[10px]">
        </div>




        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="developers" class="w-[80%] mx-auto">Developer: </label>
            <select v-model="formData.developer_id" name="developers" id="" v-if="developers" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto">
                <option value="none" selected disabled>Select a developer</option>

                <option v-for="developer in developers" :key="developer.id" :value="developer.id">{{ developer.title }}</option>
            </select>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="Types" class="w-[80%] mx-auto">Project type: </label>
            <select name="Types" id="" v-if="types" v-model="formData.type_id" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto">
                <option value="none" selected disabled>Select a type</option>

                <option v-for="type in types" :key="type.id" :value=" type.id ">{{ type.title }}</option>
            </select>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="status" class="w-[80%] mx-auto">Project status: </label>
            <select name="status" id="" v-if="statuses"  v-model="formData.status_id" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto">
                <option value="none" selected disabled>Select a type</option>

                <option v-for="status in statuses" :key="status.id" :value="status.id">{{ status.title }}</option>
            </select>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-[80%] mx-auto">
            <label for="status" class="w-full mx-auto">Available units: </label>
            <MultiSelectVue :prevSelections="formData.availableUnites" @passValues="addAvailableUnites" path="/types"/>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-[80%] mx-auto">
            <label for="amenities" class="w-full mx-auto">Amenities: </label>
            <MultiSelectVue :prevSelections="formData.amenities" @passValues="addAmenities" path="/amenities"/>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-[80%] mx-auto">
            <label for="comunityamenities" class="w-full mx-auto">Community amenities: </label>
            <MultiSelectVue :prevSelections="formData.comunityAmenities" @passValues="addComunityAmenities" path="/comunity_amenities"/>
        </div>

    </form>
    <FormNavigator @nav="nav" />
  </div>
</template>

<script>
    // import { validate } from '@babel/types';
    import FormNavigator from '../FormNavigator.vue';
    import { mapState, mapMutations } from 'vuex';
    import { apiBack } from '../../../axios';
    import MultiSelectVue from '../../MultiSelect.vue';

export default {

    components:{
        FormNavigator,
        MultiSelectVue
    },

    data(){
        return {

            developers: null,
            types: null,
            statuses: null,
            formData:{
                title:null,
                description:null,
                price:null,
                dld:null,
                completion_date:null,
                starting_date:null,
                area:null,
                featured:false,
                stores:null,
                appartments_in_store:null,
                number_of_unites_available:null,
                user_id:$cookies.get('id'),
                developer_id:null,
                type_id:null,
                bathrooms:null,
                status_id:null,
                availableUnites:[],
                amenities:[],
                comunityAmenities:[],
                locationLink:null,
                installments:null
            }
        }},
    methods:{
        ...mapMutations(['setStep1','setNav']),
        addToState(){
            // console.log('d')
           this.setStep1(this.formData)
        },
        initiate(){
            if(this.project.title != null){
                this.formData.title = this.project.title
                this.formData.locationLink = this.project.locationLink
                this.formData.description = this.project.description
                this.formData.price = this.project.price
                this.formData.bathrooms = this.project.bathrooms
                this.formData.dld = this.project.dld
                this.formData.completion_date = this.project.completion_date
                this.formData.starting_date = this.project.starting_date
                this.formData.area = this.project.area
                this.formData.featured = this.project.featured
                this.formData.stores = this.project.stores
                this.formData.appartments_in_store = this.project.appartments_in_store
                this.formData.number_of_unites_available = this.project.number_of_unites_available
                this.formData.user_id = this.project.user_id
                this.formData.developer_id = this.project.developer_id
                this.formData.type_id = this.project.type_id
                this.formData.status_id = this.project.status_id
                this.formData.availableUnites = this.project.availableUnites
                this.formData.amenities = this.project.amenities
                this.formData.comunityAmenities = this.project.comunityAmenities
                this.formData.installments = this.project.installments
            }
        },

        addAvailableUnites(unites){
            this.formData.availableUnites = unites;
        },

        addAmenities(amenities){
            this.formData.amenities = amenities;
        },

        addComunityAmenities(comunityAmenities){
            this.formData.comunityAmenities = comunityAmenities;
        },

        appendToType(types){
            types.forEach(type => {

                this.type[type.id] = type.title
            });
        },

        request(path,val){
            apiBack.get(path)
            .then((response) => {
                this[val] = response.data.payload;
                if(path == 'types'){
                    this.appendToType(response.data.payload);
                }
            })
            .catch((error) => {
                console.log(error);
            });
        },
        nav(val){
            this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'Add project - step 2 | Select area |',
                    current: 'step2',
                    prev: 'step1',
                    next: 'step3'
                 })
            }
            else{

            }
        },


    },
    computed:{
        ...mapState(['project']),

    },
    mounted(){
        this.request('/developers','developers');
        this.request('/types','types');
        this.request('/project-status','statuses');
        // this.request('/amenities','amenities');
        // this.request('/comunity-amenities','communityAmenities');
        this.initiate()

    },
}
</script>

<style>

</style>
