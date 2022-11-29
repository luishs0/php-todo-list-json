<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <div id="app">
        <div class="container">
            <h1 class="text-center mt-5">To do List</h1>
            <div class="row justify-content-center mt-3">
                <div class="col-8">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="todo in todoList">{{ todo.text }}</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-8 text-center">
                    <input type="text" placeholder="New Task" class="me-2" v-model="newTask">
                    <button class="btn btn-primary" @click="addTask"> Add </button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>