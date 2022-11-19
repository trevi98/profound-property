<template>
  <div>
    <div v-for="project in featuredProjects" :key="project.id" class="bg-[#f00] w-full h-full absolute top-0 left-0 opacity-0 hidden">
        <div>
            <div>
                <div>{{ project.title }}</div>
                <div></div>
            </div>
            <div></div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "MainSlider",
    props:['featuredProjects'],
    data(){
        return {
            // currentProject: this.featuredProjects,
            updatedOnce:false,
        }
    },
    updated() {
        console.log(this.featuredProjects)       
    },

}
</script>

<style>

</style>
