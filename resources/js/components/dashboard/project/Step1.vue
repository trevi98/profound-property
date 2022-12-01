<template>
  <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
    <form action="" class="flex flex-col justify-center items-center gap-[80px] py-[20px]">
        <MultiSelectVue @passValues="appendTypes"/>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="title" class="w-[80%] mx-auto">Title:</label>
            <input type="text" v-model="formData.title" name="title" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="description" class="w-[80%] mx-auto">Description:</label>
            <textarea  name="description" v-model="formData.description" class="h-[100px] border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto"></textarea>
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="price" class="w-[80%] mx-auto">Starting price:</label>
            <input type="number" name="price" v-model="formData.price" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="area" class="w-[80%] mx-auto">Area:</label>
            <input type="number" name="area" v-model="formData.area" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="number_of_unites_available" class="w-[80%] mx-auto">Number of unites available:</label>
            <input type="number" name="number_of_unites_available" v-model="formData.number_of_unites_available" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="stores" class="w-[80%] mx-auto">Number of stores:</label>
            <input type="number" name="stores" v-model="formData.stores" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="appartments" class="w-[80%] mx-auto">Number of appartments in store:</label>
            <input type="number" name="appartments" v-model="formData.appartments_in_store" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="dld" class="w-[80%] mx-auto">Dld waver:</label>
            <textarea name="dld" v-model="formData.dld" class="h-[100px] border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto"></textarea>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="starting_date" class="w-[80%] mx-auto">Starting date:</label>
            <input type="date" name="starting_date"  v-model="formData.starting_date" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>
        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="completion_date" class="w-[80%] mx-auto">Completion date:</label>
            <input type="date" name="completion_date" v-model="formData.completion_date" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto h-[30px] p-[10px]">
        </div>

        <div class="flex justify-start items-center gap-[20px] w-[80%] mx-auto">
            <label for="feature" class="">Feature this project? </label>
            <input type="checkbox" v-model="formData.featured" name="feature" class=" h-[30px] p-[10px]">
        </div>




        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="developers" class="w-[80%] mx-auto">Developer: </label>
            <select v-model="formData.developer_id" name="developers" id="" v-if="developers" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto">
                <option value="none" selected disabled>Select a developer</option>

                <option v-for="developer in developers" :key="developer.id" :value="developer.id">{{ developer.title }}</option>
            </select>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="Types" class="w-[80%] mx-auto">Project type: </label>
            <select name="Types" id="" v-if="types" v-model="formData.type_id" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto">
                <option value="none" selected disabled>Select a type</option>

                <option v-for="type in types" :key="type.id" :value=" type.id ">{{ type.title }}</option>
            </select>
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="status" class="w-[80%] mx-auto">Project status: </label>
            <select name="status" id="" v-if="statuses"  v-model="formData.status_id" class="border-b-[1px] border-r-[1px] border-l-[1px] border-[#555] border-solid w-[80%] mx-auto">
                <option value="none" selected disabled>Select a type</option>

                <option v-for="status in statuses" :key="status.id" :value="status.id">{{ status.title }}</option>
            </select>
        </div>

    </form>
    <FormNavigator @nav="nav" />
  </div>
</template>

<script>
    import { validate } from '@babel/types';
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
            types: [],
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
                type_id:[],
                status_id:null
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
                this.formData.description = this.project.description
                this.formData.price = this.project.price
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
            }
        },

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
            this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'Add project - step 2 | select area |',
                    current: 'step2',
                    prev: 'step1',
                    next: 'step3'
                 })
            }
            else{

            }
        },
        appendTypes(vals){
            // alert('d')
            this.formData.type_id = vals
        }

    },
    computed:{
        ...mapState(['project']),

    },
    mounted(){
        this.request('/developers','developers');
        this.request('/types','types');
        this.request('/project-status','statuses');
        this.initiate()

    },
}
</script>

<style>

</style>
