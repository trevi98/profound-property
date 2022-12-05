<template>
    <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
      <form action="" class="flex flex-col justify-center items-center gap-[80px] py-[20px]">

          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="title" class="w-[80%] mx-auto">Title:</label>
              <input type="text" v-model="formData.title" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="title" class="w-[80%] mx-auto">Property name:</label>
              <input type="text" v-model="formData.property_name" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="dld" class="w-[80%] mx-auto">Description:</label>
              <textarea name="dld" v-model="formData.description" class="h-[140px] border-[1px] border-[#a09999d8] bg-[#fff] border-solid w-[80%] mx-auto"></textarea>
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="title" class="w-[80%] mx-auto">Price:</label>
              <input type="number" v-model="formData.price" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="title" class="w-[80%] mx-auto">Location link:</label>
              <input type="text" v-model="formData.location_link" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="title" class="w-[80%] mx-auto">Video link:</label>
              <input type="text" v-model="formData.video" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
          </div>


          <div class="flex flex-col justify-start items-center w-full">
              <label for="bedrooms" class="w-[80%] mx-auto">Bedrooms: </label>
              <select v-model="formData.bedrooms" name="developers" id=""  class="w-[80%] mx-auto p-[10px] border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid ">
                <option value="0" >Studio </option>

                <option v-for="bedroom in bedrooms" :key="bedroom.val" :value="bedroom.val">{{ bedroom.title }}</option>
            </select>
        </div>


        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="title" class="w-[80%] mx-auto">Permit number</label>
            <input type="number" v-model="formData.permit_number" name="title" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>

        <div class="flex justify-start items-center gap-[20px] w-[80%] mx-auto">
            <label for="feature" class="">Feature this project? </label>
            <input type="checkbox" v-model="formData.featured" name="feature" class=" p-[10px]">
        </div>

        <div class="flex flex-col justify-center items-start gap-[15px] w-full">
            <label for="area" class="w-[80%] mx-auto">Area:</label>
            <input type="number" name="area" v-model="formData.area" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
        </div>






          <div class="flex flex-col justify-center items-start gap-[15px] w-full">
              <label for="Types" class="w-[80%] mx-auto">Project type: </label>
              <select name="Types" id="" v-if="types" v-model="formData.type_id" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto">
                  <option value="none" selected disabled>Select a type</option>

                  <option v-for="type in types" :key="type.id" :value=" type.id ">{{ type.title }}</option>
              </select>
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-[80%] mx-auto">
              <label for="amenities" class="w-full mx-auto">Amenities: </label>
              <MultiSelectVue :prevSelections="formData.amenities" @passValues="addAmenities" path="/amenities"/>
          </div>

          <div class="flex flex-col justify-center items-start gap-[15px] w-[80%] mx-auto">
              <label for="comunityamenities" class="w-full mx-auto">Community amenities: </label>
              <MultiSelectVue :prevSelections="formData.communityAmenities" @passValues="addComunityAmenities" path="/comunity_amenities"/>
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
                ],

                developers: null,
                types: null,
                statuses: null,
                formData:{
                    title: null,
                    price: null,
                    description: null,
                    cover: null,
                    location_link: null,
                    video: null,
                    bathrooms: null,
                    bedrooms: null,
                    permit_number: null,
                    property_name: null,
                    featured: null,
                    sold: null,
                    area: null,
                    category: null,
                    user_id:$cookies.get('id'),
                    location_id: null,
                    type_id: null,
                    images:[],
                    amenities:[],
                    communityAmenities:[],
                }
          }},
      methods:{
          ...mapMutations(['setStep1Property','setNav']),
          addToState(){
              // console.log('d')
             this.setStep1Property(this.formData)
          },
          initiate(){
              if(this.property.title != null){
                    this.formData.title = this.property.title
                    this.formData.price = this.property.price
                    this.formData.description = this.property.description
                    this.formData.cover = this.property.cover
                    this.formData.location_link = this.property.location_link
                    this.formData.video = this.property.video
                    this.formData.bathrooms = this.property.bathrooms
                    this.formData.bedrooms = this.property.bedrooms
                    this.formData.permit_number = this.property.permit_number
                    this.formData.property_name = this.property.property_name
                    this.formData.featured = this.property.featured
                    this.formData.sold = this.property.sold
                    this.formData.area = this.property.area
                    this.formData.category = this.property.category
                    this.formData.user_id = this.property.user_id
                    this.formData.location_id = this.property.location_id
                    this.formData.type_id = this.property.type_id
                    this.formData.images = this.property.images
                    this.formData.amenities = this.property.amenities
                    this.formData.communityAmenities = this.property.communityAmenities
              }
          },



          addAmenities(amenities){
              this.formData.amenities = amenities;
          },

          addComunityAmenities(comunityAmenities){
              this.formData.communityAmenities = comunityAmenities;
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
                      title: 'Add property - step 2 | Select area |',
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
          ...mapState(['property']),

      },
      mounted(){
          this.request('/types','types');
          // this.request('/amenities','amenities');
          // this.request('/comunity-amenities','communityAmenities');
          this.initiate()

      },
  }
  </script>

  <style>

  </style>
