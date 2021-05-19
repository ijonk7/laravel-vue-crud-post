<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header text-center"><h2><strong>LIST POST</strong></h2></div>

                    <div class="card-body">
                        <router-link :to="{ name: 'create' }" class="btn btn-md btn-primary">ADD POST</router-link>

                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr class="text-center d-flex">
                                    <th class="col-3">TITLE</th>
                                    <th class="col-6">CONTENT</th>
                                    <th class="col-3">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(post, index) in posts" :key="post.id" class="d-flex">
                                    <td class="col-3">{{ post.title }}</td>
                                    <td class="col-6">{{ post.content }}</td>
                                    <td class="text-center col-3">
                                        <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-md btn-primary mr-1">EDIT</router-link>
                                        <button @click.prevent="PostDelete(post.id, index)" class="btn btn-md btn-danger">DELETE</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = `/api/posts`;
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        },
        methods: {
            PostDelete(id, index)
            {
                this.axios.delete(`/api/posts/${id}`)
                    .then(response => {
                        this.posts.splice(index, 1);
                    }).catch(error => {
                    alert('system error!');
                });
            }
        }
    }
</script>
