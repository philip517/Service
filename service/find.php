<?php

session_start();
require "conn.php" ;


if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 // SQL query to fetch all truck records
 if ($id) {
    try {
        // Use a prepared statement to prevent SQL injection
        $sql = "
        SELECT 
            trucks.id AS truck_id,
            trucks.truck_plate,
            services.service_date,
            services.job_card_number,
            services.odometer
        FROM 
            trucks
        INNER JOIN 
            services ON trucks.id = services.truck_id
        WHERE 
            trucks.id=:id
        ORDER BY services.service_date DESC
            
    ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Bind the sanitized ID as an integer
        $stmt->execute();
        $truck = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //  var_dump($truck);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location:index.php");
}

}else{
    header("Location:index.php");
}

if (isset($_POST['submit'])){
    echo "<h1>POST IS SET</h1>";
    $old_odo = $truck['0']['odometer'];
    $new_odo = $_POST['odometer'];

if ($old_odo > $new_old){
    $info = "the new odometer reading is lower than the previous odometer reading";
    $info_1 = "No Service";

}else{
    $distance = $new_odo - $old_odo;
    if($distance == 0){
        $info = "the Truck has not travelled any distance since the last service";
        $info_1 = "No Service";
    }if(($distance >= 19500)){
        $info_1 = "Needs Service";

        
    }
}
   echo "new = ".$_POST['odometer']."</br>";
   echo "old = ".$truck['0']['odometer']."</br>";
   echo "result = ".($new_odo - $old_odo);




}























?>



<!DOCTYPE html>
<html lang="en" style="color: var(--bs-teal);background: var(--bs-gray-100);">

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
<!-- <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">SERVICE KIT&nbsp;</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="add.php">Add truck</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="trucks.php">truck list</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="more.php">more</a></li>
                </ul>
            </div>
        </div>
    </nav> -->
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72" style="background: var(--bs-gray-100);">
    <header class="text-center text-white bg-primary masthead" style="font-family: Montserrat, sans-serif;background: var(--bs-gray-100);">
        <div class="container" style="width: 943px;background: var(--bs-gray-100);">
            <div class="row" style="background: var(--bs-gray-100);">
                <div class="col">
                    <section class="py-4 py-xl-5" style="padding-top: 54px;margin-top: 35px;">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: var(--bs-card-bg);">
                                                <h2 style="text-align: center;font-size: 60px;color: var(--bs-black);font-family: ABeeZee, sans-serif;"><?php echo $truck['0']['truck_plate'];?></h2>
                                            </div>
                                            <form class="text-center" method="post">
                                                <div class="mb-3"><input class="form-control" type="number" name="odometer" placeholder="1234567........"></div>
                                                <div class="mb-3"><input class="form-control" type="date" name="date" placeholder="dd/mm/yyyy"></div>
                                                <div class="mb-3"><button class="btn btn-primary d-block w-100" name="submit" type="submit">CHECK</button>
                                                <h1 class="btn btn-primary d-block w-100" type="submit" style="margin-top: 19px;">CHECK</h1></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container" style="width: 943px;margin-top: 60px;">
            <div class="row">
                <div class="col" style="background: var(--bs-white);margin-top: -68px;">
                    <h1 style="height: 65px;font-size: 36px;color: var(--bs-gray-900);padding-top: 0px;margin-top: 5px;">SERVICE HISTORY</h1>
                    
                    
                    <div class="table-responsive">
                        <table class="table" style="text-align:center;">
                            <thead >
                                <tr>
                                    <th>JOB CARD</th>
                                    <th>DATE</th>
                                    <th>ODOMETER</th>
                                </tr>
                            </thead>
                            <tbody >
                            <?php foreach($truck as $truck){?>
                                <tr>
                                    <td><?php echo $truck['job_card_number'];?></td>
                                    <td><?php echo $truck['service_date'];?></td>
                                    <td><?php echo $truck['odometer'];?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>
