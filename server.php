<?php 
    include __DIR__ .'/partials/database.php';

    header('Content-Type : application/json');

    $encoded = json_encode($database);

    echo $encoded ;

    // foreach ($database as $object) {
    //     echo '<hr>';
    //     foreach ($object as $item => $val) {
    //         echo  $item . ' : ' . $val . '<br>';
    //     } 
    // }
?>