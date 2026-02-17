<?php
$string = file_get_contents('array.json');

$array = json_decode($string, true);

if (isset($_POST['language'])) {

    /*  $item = $_POST['language'];

    $toDoItems = [
        'language' => $item,
        'done' => false
    ];

    $array[] = $toDoItems; */

    /* In PHP posso usare direttamente $_POST (è un array associativo), MA bisogna fare attenzione a dare un NOME (KEY) fisso alle proprietà. Se uso una chiave NUOVA/dinamica, devo uniformare la struttura ARRAY come nel metodo precedente, perché tutti gli oggetti devono avere la STESSA struttura.*/

    $array[] = $_POST;

    file_put_contents('array.json', json_encode($array, JSON_PRETTY_PRINT));
}

if (isset($_POST['element'])) {
    unset($array[$_POST['element']]);

    file_put_contents('array.json', json_encode($array, JSON_PRETTY_PRINT));
}

header('Content-Type: application/json');
echo json_encode($array);
