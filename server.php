<?php

$content = file_get_contents("todo.json");
$todo_list = json_decode($content, true);

if (isset($_POST["newTask"])) {
    $new_task = $_POST["newTask"];
    $todo_list[] = ["text" => $new_task, "done" => false];

    file_put_contents("todo.json", json_encode($todo_list));
}

header("Content-Type: application/json");
echo json_encode($todo_list);
