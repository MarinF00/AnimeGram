<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
export default {
    name:'follow-button',
    props:['user_id', 'follows'],

    mounted() {
        console.log('Component mounted.')
    },

    data: function () {

        return {
            status: this.follows,
        }
},
    methods: {
        followUser() {
         axios.post("/cms/public/follow/" + this.user_id)
            .then(response => {
                this.status = !this.status;
                console.log(response.data);
            })
            .catch(errors=> {
                if(errors.response.status == 401) {
                    window.location = "/cms/public/login";
                }
            })
        },
    },
    computed: {
        buttonText()
        {
            return (this.status) ? "Unfollow" : "Follow";
        }
    }
}
</script>
