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
                <tr v-for="project in projects" :key="project.id">
                    <td>{{ project.title }}</td>
                    <td>{{ project.developer }}</td>
                    <td>
                        <div class="text-[#a00] cursor-pointer" @click="deleteProject($event,project.id)">
                            Delete
                        </div>
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
            projects: null,
        }
    },
    methods:{
        deleteProject($event,id){
            apiBack.post('/delete_projects',{id})
            .then((response) => {
                $event.target.parentElement.parentElement.remove();
                console.log(response.data);
                this.projects.filter((project)=>{
                    if(project.id != id){
                        return true;
                    }
                    return false;
                })
                var myTable = $('#table_id').DataTable();
                myTable.clear().rows.add(this.projects).draw();
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
                this.projects = response.data.payload;
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
