<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


</head>

<body>
    <div id="app">
        <div class="container mt-5">
            <div class="row">
                <div class="col text-center">
                    <h1>ToDo List</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <ul class="list-unstyled w-50 text-center">
                            <li class="border border-primary p-2" v-for="item in toDoList">
                                {{item.language}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="d-flex justify-content-center mt-3">
                        <input @keyup.enter="addTask" v-model="newTask" class="form-control w-50" type="text"
                            placeholder="Inserici nuova todo">
                        <button @click="addTask" class="mx-3 btn btn-primary">
                            Inserici
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>