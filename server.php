<?php 
    include __DIR__ .'/partials/database.php';

    header('Content-Type : application/json');

    $encoded = json_encode($database);

    echo $encoded ;
?>