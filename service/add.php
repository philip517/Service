<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Cards-icons.css">
</head>

<body>
    <header style="margin-top: 113px;">
        <div class="container">
            <section class="py-4 py-xl-5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2 style="padding-top: 0px;margin-top: 44px;">ADD TRUCK</h2>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <form class="text-center" method="post">
                                        <div class="mb-3"><input class="form-control" type="text" name="truck_num" placeholder="Number Plate" style="margin-top: 12px;" minlength="7" maxlength="10"></div>
                                        <div class="mb-3"></div>
                                        <div class="mb-3"><input class="form-control" type="text" name="jc-num" placeholder="Job Card Number" style="margin-top: 12px;"></div>
                                        <div class="mb-3"></div>
                                        <div class="mb-3"><input class="form-control" type="date" name="date" placeholder="dd/mm/yyyy" style="margin-top: 12px;"></div>
                                        <div class="mb-3"></div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Truck</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>