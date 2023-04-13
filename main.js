const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todos: [],
            newToDo: ''
        }
    },
    methods: {
        getTodos() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response);
                this.todos = response.data;
            })
        },
        //metodo per aggiungere nuovi todo
        addToDo(){
            console.log(this.newToDo);

            const headers = {
                'Content-Type': 'multipart/form-data',
                'Accept': 'application/json'
            }

            const data = {
                add: true,
                todo: this.newToDo
            };
            axios.post(this.apiUrl, data, { headers }).then((response) =>{
                console.log(response);
                this.todos = response.data;
            })
        }
    },
    created() {
        this.getTodos();
    }
}).mount('#app');