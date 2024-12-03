<?php

session_start();
require "conn.php" ;

try {
    // SQL query to fetch all truck records
    $sql = "SELECT id, truck_plate FROM trucks";

    // Prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all rows as an associative array
    $trucks = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>




<!DOCTYPE html>
<html lang="en" style="color: var(--bs-teal);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Cards-icons.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72" style="background: var(--bs-primary);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">SERVICE KIT&nbsp;</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="add.php">Add truck</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="trucks.php">truck list</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="more.php">more</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white bg-primary masthead">
        <div class="container" style="border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
            <h1 style="padding-bottom: 0px;margin-bottom: 44px;">Search Truck</h1>
            <div><input class="form-control-lg" type="search" style="width: 224px;height: 63px;margin-right: 0px;font-size: 26px;padding-top: 0px;border-bottom-left-radius: 10px;border-top-left-radius: 10px;border-bottom-right-radius: 0px;border-top-right-radius: 0px;border-width: 0px;border-color: var(--bs-gray-100);" placeholder="aaa123"><button class="btn btn-primary" type="button" style="height: 63px;background: var(--bs-blue);margin-bottom: 0px;width: 95.6px;font-size: 24px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-color: var(--bs-blue);">Search</button></div>
        </div>
    </header>
    <div>
        <div class="container py-4 py-xl-5" style="padding-top: 16px;margin-top: -57px;">
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="text-decoration: underline;">

                <?php foreach ($trucks as $truck) {?>
                <div class="col" style="text-decoration: underline;text-align: center;"><a href="find.php?id=<?php echo $truck['id']?>">Link<div class="card">
                            <div class="card-body p-4">
                                <h1 style="text-decoration: underline;"><?php echo $truck['truck_plate'];?></h1>
                            </div>
                        </div></a>
                </div>
                <?php }} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$pdo = null;
?>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>


<?php




















?>