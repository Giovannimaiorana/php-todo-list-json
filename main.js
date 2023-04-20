const { createApp } = Vue

createApp({
    data() {
        return {
            allTasks: [],
        }

    },
    methods: {
        readTask() {
            axios.get('server.php')
                .then(response => {
                    this.allTasks = response.data;
                })
        },
    },
    mounted() {
        this.readTask();
    }

}).mount('#app')