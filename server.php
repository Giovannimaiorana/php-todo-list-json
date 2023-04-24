<?php
$string = file_get_contents('database.json');
$tasks = json_decode($string, true);

   

    if (isset ($_POST['task'])){
        $tasks[]=[
            'testo'=> $_POST['task'],
            'condition'=> 'true'
        ];
      
        $my_string = json_encode($tasks);
        file_put_contents('database.json', $my_string);
    }
    

    header('Content-Type: application/json');
    echo json_encode($tasks);

    ?>