<li>{{message}}</li>
<template>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Remember token</th>
            <th width="100">Remove</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(user,index) in users">
            <td>{{index + 1}}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.password }}</td>
            <td>{{ user.remember_token }}</td>
            <td><button @click="removeUser(user.id)">Remove</button></td>
        </tr>
        </tbody>
    </table>

</template>

<script>
    export default {
        props:{
          _users: {type:Array}
        },

        data: function () {
            return {
                users: this._users,
                remove_link: String
            }
        },
        mounted() {
            this.getAllUser();

        },
        methods:{
            getAllUser(){
                let app = this;
                axios.get('api/users').then(function(res){
                    app.users = res.data.data;
                    //console.log(res.data.data);
                });
            },
            filterUser(){
                this.users = this.users.filter(function(item){
                    return item.name.math('ABCD');
                })
            },
            getRemoveLinkSpecificForUser(index){
                return 'api/remove/' + index;

            },
            removeUser(id){
                //console.log('api/remove/' + id);
                let app = this;
                axios.get('api/remove/'+id).then(function (res) {
                   console.log(res.data.data);
                    app.getAllUser();
                });

            }
        }
    }
</script>

<style scoped>

</style>