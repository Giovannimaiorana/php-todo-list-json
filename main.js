const { createApp } = Vue

createApp({
    data() {
        return {
            allTasks: [],
            newTask: [],
        }

    },
    methods: {
        readTask() {
            axios.get('server.php')
                .then(response => {
                    this.allTasks = response.data
                })
        },
        addTask() {
            const data = {
                task: this.newTask
            };
            axios.post('server.php', data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }
            ).then(response => {
                this.allTasks = response.data;
                this.newTask = '';
            })
        }

    },
    mounted() {
        this.readTask();
    }

}).mount('#app')