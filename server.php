<?php
$string = file_get_contents('array.json');

$array = json_decode($string, true);

if (isset($_POST['language'])) {
    $item = $_POST['language'];

    $toDoItems = [
        'language' => $item,
        'done' => false
    ];

    $array[] = $toDoItems;

    file_put_contents('array.json', json_encode($array));
}

header('Content-Type: application/json');
echo json_encode($array);
