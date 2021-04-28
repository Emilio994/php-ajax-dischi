<?php 
    include __DIR__ .'/database.php';
    // var_dump($database);
    $myFilter = $_GET['filtro'];
    $filteredDatabase = [];
    // echo $myFilter . '<br>';

    foreach($database as $album) {
        if (in_array($myFilter , $album)) {
            $filteredDatabase [] = $album;
        }
    }

    // var_dump($filteredDatabase);
    echo json_encode($filteredDatabase);
    
