<template>
    <div class="w-[80%] mx-auto">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Project</th>
                    <!-- <th>Image</th> -->
                    <th>Developer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody v-if="projects">
                <tr v-for="project in projects" :key="project[2]">
                    <td>{{ project[0] }}</td>
                    <td>{{ project[1] }}</td>
                    <td>
                        <router-link class="text-[#a00] cursor-pointer" :to="{name:'EditProject',params:{id:project[2]}}">
                            Edit
                        </router-link>
                    </td>
                </tr>

            </tbody>
            </table>


    </div>
</template>

<script>
    import {apiBack} from '../../../axios.js'

export default {
    data(){
        return {
            projects: [],
        }
    },
    methods:{
        deleteProject($event,id){
            apiBack.post('/delete_projects',{id})
            .then((response) => {
                $event.target.parentElement.parentElement.remove();
                console.log(response.data);
                let projects = [];
                this.projects.filter((project)=>{
                    if(project[2] != id){
                        return true;
                    }
                    return false;
                })
                // $('#table_id').datatable().api().ajax.reload();
                // $('#table_id').DataTable().draw();

            })
            .catch((error) => {
                console.log(error);
            });
        }
    },
    mounted(){
        apiBack.get('/projects')
            .then((response) => {
                 response.data.payload.forEach(elmnt => {
                    this.projects.push([elmnt.title,elmnt.developer,elmnt.id]);
                 });
                $(document).ready( function () {
                    $('#table_id').DataTable();
                } );
            })
            .catch((error) => {
                console.log(error);
            });
    }
}
</script>

<style>

</style>
