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
    <title>PHP Hotel</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-body-secondary">
    <div class="container my-3">
        <div class="bg-white rounded-2 p-5">
            <h1 class="fs-2 mb-4">Hotels disponibili</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Hotel</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col" class="text-center">Parcheggio</th>
                        <th scope="col" class="text-center">Voto</th>
                        <th scope="col" class="text-center">Km dal centro</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td class="text-center"><?php echo $hotel['parking'] ? 'Sì' : 'No' ?></td>
                            <td class="text-center"><?php echo $hotel['vote'] ?></td>
                            <td class="text-center"><?php echo $hotel['distance_to_center'] ?> km</td>
                        </tr>
                    <?php } ?>
                </tbody>
        </div>
        </table>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>