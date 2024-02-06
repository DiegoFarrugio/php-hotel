<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>
       



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT-FAMILY -->

        <!-- LINK CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <!-- TITLE PAGE -->
        <title>PHP Hotel</title>
    </head>

        
    <body>
        <?php
            foreach($hotels as $infoHotel){ ?>
                <div class="card mt-4" style="width: 18rem;">
                    <div class="card-header background-color-name-hotel">
                        Nome Hotel : 
                        <strong><?php echo $infoHotel['name'] ?></strong>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Descrizione Hotel: 
                            <?php echo $infoHotel['description'] ?>
                        </li>

                        <li class="list-group-item">
                            Parcheggio: 
                            <?php
                             if($infoHotel['parking'] == true){
                                echo 'parcheggio disponibile';
                            }
                            else{
                                echo 'parcheggio non disponibile';
                            } 
                            ?> 
                        </li>

                        <li class="list-group-item fw-light ">
                            Voto struttura: 
                            <?php 
                            if($infoHotel['vote'] <= 3){
                                echo 'Struttura non particolarmente consigliata';
                            }
                            else if($infoHotel['vote'] >= 4){
                                echo $infoHotel['vote'];
                            } ?>
                        </li>

                        <li class="list-group-item">
                            Distanza dal centro: 
                            <?php echo $infoHotel['distance_to_center'] ?> km
                        </li>

                    </ul>
                </div>            
        <?php            
        }
        ?> 
        
    </body>
</html>