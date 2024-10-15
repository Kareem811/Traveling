<?php
require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/places.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('nav.php');
    $placeName = $_GET['place'];
    $selectQuery = "SELECT * FROM `places` WHERE `pname` = '$placeName'";
    $selectDone = mysqli_query($conn, $selectQuery);
    $place = mysqli_fetch_assoc($selectDone);
    $selectTrips = "SELECT * FROM `trips` WHERE `tplace` = '$placeName'";
    $selectTripsDone = mysqli_query($conn, $selectTrips);
    $trips = mysqli_fetch_all($selectTripsDone);
    // print_r($trips);

    ?>
    <section class="tripsTitle">
        <h1><?php echo $place['pname']; ?></h1>
    </section>
    <section class="tripsContainer">
        <?php
        foreach ($trips as $trip) {
            $tripImages = json_decode($trip[7]);
        ?>
            <div class="trip">
                <img src="Admin/<?php echo $tripImages[0]; ?>" alt="" />
                <div class="tripData">
                    <h2><?php echo $trip[1] ?></h2>
                    <span>EGP <?php echo $trip[2]; ?></span>
                    <p><?php echo $trip[3]; ?></p>
                    <a href="singletrip.php?trip=<?php echo $trip[0]; ?>">Read More</a>
                </div>
            </div>
        <?php }
        ?>
    </section>

    <?php
    include('footer.php')
    ?>
</body>

</html>