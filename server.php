<?php

$content = file_get_contents("todo.json");
$todoList = json_decode($content, true);


header("Content-Type: application/json");
echo json_encode($todoList);
