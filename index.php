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
    <title>Arlong Park</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/flag.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

</head>



<body>


    <header>

        <div class="container">

            <img src="./img/flag.png" alt="">
            <h1 class="text-center display-1 fw-bold py-4">Arlong Park</h1>

        </div>
    </header>

    <main>

        <div class="container">

            <form class="d-flex align-items-center" action="" method="GET">

                <select name="parking" class="form-select w-25 me-4 my-3" aria-label="Default select example">
                    <option value="null" hidden selected>Parcheggio Nave</option>
                    <option value="1">SI... è nostra</option>
                    <option value="0">NO... sei nostro</option>
                    <option value="null">INDIFFERENTE... ci prendiamo entrambi</option>
                </select>

                <select name="vote" class="form-select w-25 mx-3" aria-label="Default select example">
                    <option value='null' hidden selected>Voto Location</option>
                    <option value="null">🦈🦈🦈🦈🦈🦈</option>
                    <option value="1">🦈</option>
                    <option value="2">🦈🦈</option>
                    <option value="3">🦈🦈🦈</option>
                    <option value="4">🦈🦈🦈🦈</option>
                    <option value="5">🦈🦈🦈🦈🦈</option>
                </select>

                <button type="submit" class="btn btn-success"><img class="btn-arlong pe-2" src="./img/flag.png" alt="">Offerta</button>

            </form>
            <table class="table">
                <thead>
                    <tr class="">
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to Center</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($hotels as $hotel) {

                        if (

                            !$_GET
                            || $hotel['parking'] == $_GET['parking'] && $hotel['vote'] >= $_GET['vote']
                            || $hotel['parking'] == $_GET['parking'] && $_GET['vote'] == 'null'
                            || $_GET['parking'] == 'null' && $hotel['vote'] >= $_GET['vote']
                            || $_GET['vote'] == 'null' && $_GET['parking'] == 'null'
                        ) {

                    ?>
                            <tr>
                                <th scope="row"><?php echo $hotel['name'] ?></th>
                                <td><?php echo $hotel['description'] ?></td>
                                <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?></td>

                            </tr>
                    <?php
                        }
                    }

                    ?>
                </tbody>
            </table>

        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>