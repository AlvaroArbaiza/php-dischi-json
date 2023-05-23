const { createApp } = Vue

    createApp({
        data() {
            return {
                pathServer: 'server.php',
                data: '',
                cardInfo: false,
                indexInfo: 0
            }
        },
        methods: {

            // method per la chiamata dell'array nel file php
            call() {
                axios.get(this.pathServer)
                .then( (res) => {

                    this.data = res.data

                })
            },

            // method per comparsa informazioni card
            infoCard(index) {
                this.indexInfo = index;
                this.cardInfo = true;
            },

            // method per la chiusura delle informazioni card
            closeInfo() {
                this.cardInfo = false;
            }
        },
        mounted() {
            this.call();
        }
    }).mount('#app')