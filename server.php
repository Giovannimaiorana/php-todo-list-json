<?php
$tasks=[
    [
        'testo'=>'Fare la Spesa',
        'condition'=>'true',
    ],
    [
        'testo'=>'Andare dal Medico',
        'condition'=>'true'
    ],
    [
        'testo'=>'Comprare Le Sigarette',
        'condition'=>'true'
    ],
    [
        'testo'=>'Fare Ricarica',
        'condition'=>'true'
    ],
    [
        'testo'=>'Annaffiare Piante',
        'condition'=>'true'
    ]
    ];

   

    if (isset ($_POST['task'])){
        $tasks[]=[
            'testo'=> $_POST['task'],
            'condition'=> 'true'
        ];

    }

    header('Content-Type: application/json');
    echo json_encode($tasks);

    ?>