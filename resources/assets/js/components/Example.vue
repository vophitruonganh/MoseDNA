<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body" :users="users" v-for="user in users">
                        <ul v-for="comment in user.comments.data">
                            <li class="text-success">{{ comment.from.name }}
                                <ul>
                                    <li class="text-default">{{ comment.message}}</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/ecmascript-6">
    export default {
//        props:['users'],
        data: function () {
            return {
                users: []
            }
        },
        created(){
          this.users = this.getUser();
          console.log(this.users);
        },
        mounted(){
            console.log("Mounted");
        },
        updated: function () {
            console.log("Updated");
        },
        beforeUpdate: function () {
          console.log('Before update');
        },
        methods:{
            getUser(){
                axios.get('http://www.mosedna.com/api/v1.0/posts')
                    .then(response => {
                        this.users = this.users = response.data;
                    }).catch(response => console.log(response.data));
            }
        }
    }
</script>
