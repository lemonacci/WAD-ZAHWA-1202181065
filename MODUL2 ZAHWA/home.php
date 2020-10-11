<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="assets/styles.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Overpass:wght@400;700&&display=swap"
        rel="stylesheet">

    <link rel="icon" href="assets/logo-ead.png">

    <title>EAD Hotel | Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
            aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <center>
            <h3 class="text-info">EAD HOTEL</h3>
            <h4 class="text-info mb-4">Welcome to 5 Star Hotel</h4><br>
        </center>

        <form action="booking.php" method="get">
            <div class="row card-deck">
                <div class="col"></div>
                <div class="col">
                    <div class="card text-center shadow rounded" style="width: 15rem;">
                        <img src="assets/Standard.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Standard</h5>
                            <h5 class="card-title text-info">$ 90/Day</h5>
                        </div>
                        <div class="card-header">Facilities</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 Single Bed</li>
                            <li class="list-group-item">1 Bathroom</li>
                        </ul>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" value="Standard" name="booknow">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card text-center shadow rounded" style="width: 15rem;">
                        <img src="assets/Superior.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Superior</h5>
                            <h5 class="card-title text-info">$ 150/Day</h5>
                        </div>
                        <div class="card-header">Facilities</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 Double Bed</li>
                            <li class="list-group-item">1 Television and Wi-Fi</li>
                            <li class="list-group-item">1 Bathroom with hot water</li>
                        </ul>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" value="Superior" name="booknow">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card text-center shadow rounded" style="width: 15rem;">
                        <img src="assets/Luxury.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Luxury</h5>
                            <h5 class="card-title text-info">$ 200/Day</h5>
                        </div>
                        <div class="card-header">Facilities</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">2 Double Bed</li>
                            <li class="list-group-item">2 Bathroom with hot water</li>
                            <li class="list-group-item">1 Kitchen</li>
                            <li class="list-group-item">1 Television and Wi-Fi</li>
                            <li class="list-group-item">1 Workroom</li>
                        </ul>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" value="Luxury" name="booknow">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </form>
    </div>


    <!-- JavaScripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>

</html>