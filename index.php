<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
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

<?php 

$parkinFilter = $_GET['parcheggio'] ?? 'off'

?>

    <form action="index.php" method="get">
        <span>Selezione per Parcheggio</span>
        <input type="checkbox" name="parcheggio" id="">
        <input type="submit" value="Invia">
    </form>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Parking</th>
        <th scope="col">Vote</th>
        <th scope="col">Distance to Center</Center></Center></th>
    </tr>
    </thead>

    <tbody>
        <?php foreach($hotels as $hotel) { ?>
        <?php $park = $hotel["parking"] ? '<i class="fa-solid fa-square-parking" style="color: #00ff04;"></i>' : '<i class="fa-solid fa-square-parking" style="color: #ff0000;"></i>' ?>
        <?php if($parkinFilter == 'on' && $hotel['parking']){ ?>
    <tr>
        <td><?php echo $hotel['name'] ?></td>
        <td><?php echo $hotel['description'] ?></td>
        <td><?php echo $park ?></td>
        <td><?php echo $hotel['vote'] ?></td>
        <td><?php echo $hotel['distance_to_center'] ?></td>
    </tr>


    <?php } else if($parkinFilter == 'off'){ ?>
    <tr>
        <td><?php echo $hotel['name'] ?></td>
        <td><?php echo $hotel['description'] ?></td>
        <td><?php echo $park ?></td>
        <td><?php echo $hotel['vote'] ?></td>
        <td><?php echo $hotel['distance_to_center'] ?></td>
    </tr>
    <?php } ?>
    <?php } ?>

    </tbody>
    </table>

</body>
</html>