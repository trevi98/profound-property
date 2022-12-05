<template>
    <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
      <div class="flex justify-center items-center">
          <UploadeFile @uploaded="uploaded($event,'cover')" label="Cover" name="file" path="/upload_file" :allowed="allowedImages" :added="property.cover != null ? true : false"/>
          <UploadMultipleFiles  @uploaded="uploaded($event,'images')" label="Additional images" name="files" path="/upload_multiple_file" :allowed="allowedImages" :added="property.images.length > 0 ? true : false"/>

          </div>
          <hr>
      <div class="flex justify-center items-center">
          <UploadeFile @uploaded="uploaded($event,'floorPlans')" label="Floor plans" name="file" path="/upload_file" :allowed="allowedFiles" :added="property.floorPlans != null ? true : false"/>

          <UploadeFile @uploaded="uploaded($event,'floor3Ds')" label="3D file" name="file" path="/upload_file" :allowed="allowedFiles" :added="property.floor3Ds != null ? true : false"/>
      </div>
      <hr class="my-[20px]">
      <FormNavigator @nav="nav" :submit="true" />
    </div>
  </template>

  <script>
  import FormNavigator from '../FormNavigator.vue';
  import { mapMutations,mapState } from 'vuex';
  import { apiFront } from '../../../axios';
  import UploadeFile from '../UploadeFile.vue';
  import UploadMultipleFiles from '../UploadMultipleFiles.vue';
  export default {
      components:{FormNavigator,UploadeFile,UploadMultipleFiles },
      data(){
          return {
              allowedImages : ['jpg','jpeg','png','svg'],
              allowedFiles : ['jpg','jpeg','png','svg','pdf'],
              formData:{
                floorPlans:null,
                floor3Ds:null,
                cover:null,
                images:[]
              }
          }
      },
      methods:{
          ...mapMutations(['setNav','setStep3Property']),

          uploaded(file,feild){
              console.log(file)
              this.formData[feild] = file;
          },

          initiate(){
              if(this.property.cover){
                  this.formData.cover = this.property.cover;
              }
              if(this.property.floor3Ds){
                  this.formData.floor3Ds = this.property.floor3Ds;
              }
              if(this.property.floorPlans){
                  this.formData.floorPlans = this.property.floorPlans;
              }
              if(this.property.images.length>0){
                  this.formData.images = this.property.images;
              }
              else{
                  this.formData.images = []
              }
          },

          addToState(){
              // console.log('d')
              if(this.formData.images == null){
                  this.formData.images = []
              }
             this.setStep3Property(this.formData)
          },


          nav(val){
              this.addToState();
              if(val == 'next'){
                // alert('d')
                //////////

                apiFront.post( '/create_property',
                    this.property,
                    ).then((res)=>{
                        console.log(res.data)
                    })
                    .catch((err)=>{
                        // alert(res)
                    console.log(err);
                });

                //////////

                this.setNav({
                    title: 'Add property - step 1 | basic info |',
                    current: 'step1',
                    prev: null,
                    next: 'step2'
                 })

            }
              else{
                  // this.addToState();
                  this.setNav({
                      title: 'Add property - step 2 | Select area |',
                      current: 'step2',
                      prev: 'step1',
                      next: 'step3'
                   })
              }
          }
      },
      computed:{
          ...mapState(['property'])
      },
      mounted(){
          this.initiate()
      }
  }
  </script>

  <style>

  </style>
