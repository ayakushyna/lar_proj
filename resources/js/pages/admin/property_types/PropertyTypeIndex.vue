<template>
    <div class="container-fluid">
        <div class="form-group">
            <router-link :to="{path: $route.fullPath + '/create'}" :name="this.name" class="btn btn-primary">Add new {{ name }}</router-link>
        </div>

        <Table :name="name"
               :hasShow=hasShow
               :hasEdit=hasEdit
               :hasDelete=hasDelete
               :pageEdit="pageEdit"
               :api="api"
        ></Table>
    </div>
</template>
<script>

    import Table from "../../../components/Table";
    export default {
        data(){
            return {
                name: 'Property Type',
                hasEdit:true,
                hasDelete:true,
                pageEdit: 'PropertyTypeEdit',
                api: {
                    get: this.$route.meta.api,
                    delete: this.$route.meta.api,
                }
            }
        },
        components:{
            Table
        }
    }

</script>

