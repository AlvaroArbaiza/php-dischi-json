const { createApp } = Vue

    createApp({
        data() {
            return {
                pathServer: 'server.php',
                data: ''
            }
        },
        methods: {
            call() {
                axios.get(this.pathServer)
                .then( (res) => {

                    this.data = res.data

                })
            }
        },
        mounted() {
            this.call();
        }
    }).mount('#app')