<template>
<Multiselect
  v-model="value"
  mode="tags"
  :close-on-select="false"
  :searchable="false"
  :create-option="false"
  :options="options"
@change="passValues" />

  </template>

  <script>
    import Multiselect from '@vueform/multiselect'
    import { apiBack } from '../axios'

    export default {
      components: {
        Multiselect,
      },
      data() {
        return {
          value: null,
          options:[]
        }
      },
      mounted(){
        apiBack.get('/types')
        .then((response) => {
            // this.value = response.data.payload;
            response.data.payload.forEach(type => {
                let temp = {'value':type.id,'label':type.title};
                this.options.push(temp)
            })
            console.log(response.data.payload)
        })
        .catch((error) => {
            console.log(error);
        })
      },
      methods:{
        passValues(values){
            // console.log(x)
            this.$emit('passValues',values)
            // console.log(this.value)
        }
      }
    }
  </script>

  <style src="@vueform/multiselect/themes/default.css"></style>
