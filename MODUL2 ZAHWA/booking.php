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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <link rel="icon" href="assets/logo-ead.png">

    <title>EAD Hotel | Booking</title>
    
    <script>
        function jsDropdown(imgId, folder, newImg) {
            document.getElementById(imgId).src = folder + "/" + newImg + ".jpg";
        }
    </script>
</head>

<body>
    <?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $booknow = $_GET['booknow'];
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
            aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="booking.php">Booking <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <form action="my_booking.php" method="post">
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Check-in</label>
                        <input type="date" class="form-control" id="datepicker" name="checkin">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Duration</label>
                        <input type="number" class="form-control" id="duration" name="duration">
                        <small class="form-text text-muted">Day(s)</small>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Room Type</label>                        
                        <?php 
                            if ($booknow == "Standard") {   
                                echo'
                                    <select id="rmtype" name="rmtype" class="form-control" readonly>                                 
                                        <option value="Standard" selected />Standard</option>
                                    </select>
                                ';
                            } elseif ($booknow == "Superior") {
                                echo'
                                    <select id="rmtype" name="rmtype" class="form-control" readonly>                                 
                                        <option value="Superior" selected />Superior</option>
                                    </select>
                                ';
                            } elseif ($booknow == "Luxury") {
                                echo'
                                    <select id="rmtype" name="rmtype" class="form-control" readonly>                                 
                                        <option value="Luxury" selected />Luxury</option>
                                    </select>
                                ';
                            } else {
                                echo'
                                    <select id="rmtype" name="rmtype" class="form-control" onChange="jsDropdown(\'cful\',\'assets\',this.value)">                                 
                                        <option value="Standard" selected />Standard</option>
                                        <option value="Superior" />Superior</option>
                                        <option value="Luxury" />Luxury</option>
                                    </select>
                                ';                                    
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Add Service(s)</label>
                        <small class="form-text text-muted">$ 20/Service</small>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="services" name="rmserve">
                            <label class="form-check-label">
                                Room Service
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="services" name="breakfast">
                            <label class="form-check-label">
                                Breakfast
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">Book</button>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col">
                    <?php 
                        if ($booknow == "Standard") {                                    
                            echo'
                            <img src="assets/Standard.jpg" style="width: 400px; height: auto;">';
                        } elseif ($booknow == "Superior") {
                            echo'
                            <img src="assets/Superior.jpg" style="width: 400px; height: auto;">';
                        } elseif ($booknow == "Luxury") {
                            echo'
                            <img src="assets/Luxury.jpg" style="width: 400px; height: auto;">';
                        } else {
                            echo'<img src="assets/Standard.jpg" style="width: 400px; height: auto;" id="cful">';
                        }
                    ?>
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