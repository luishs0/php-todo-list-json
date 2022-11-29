const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            newTask: "",
        }
    },
    created() {
        axios.get("server.php").then((resp) => {
            this.todoList = resp.data;
            console.log(this.todoList);
        });
    },
    methods: {
        addTask() {
            const params = {
                newTask: this.newTask,
            };

            axios.post("server.php", params, {
                headers: {
                    "Content-Type": "multipart/form-data"
                },
            }).then((resp) => {
                this.todoList = resp.data;
                this.newTask = "";
                console.log(this.todoList);
            });
        }
    }
}).mount("#app")