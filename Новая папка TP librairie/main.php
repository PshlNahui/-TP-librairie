<?php
$url="https://www.googleapis.com/books/v1/volumes/wJyVDAAAQBAJ";

$response = file_get_contents($url);

$books = json_decode($response)->items;



?>


