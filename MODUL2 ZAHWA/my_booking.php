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

    <title>EAD Hotel | My Booking</title>
</head>

<body>
    <?php
        $name = $_POST['name'];
        $checkin = $_POST['checkin'];
        $duration = $_POST['duration'];
        
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        
        $rmtype = $_POST['rmtype'];
        $phone = $_POST['phone'];
        $rmserve = $_POST['rmserve'];
        $breakfast = $_POST['breakfast'];
        $pricesrv1 = $_POST['pricesrv1'];
        $pricesrv2 = $_POST['pricesrv2'];
        
        if ($rmtype == "Standard") {
            $roomprice = 90;
        } elseif ($rmtype == "Superior") {
            $roomprice = 150;
        } elseif ($rmtype == "Luxury") {
            $roomprice = 200;
        }

        if ($rmserve == "services") {
            $ket1 = "Room Service";
            $pricesrv1 = 20;
        } else {
            $ket1 = null;
            $pricesrv1 = 0;
        }

        if ($breakfast == "services") {
            $ket2 = "Breakfast";
            $pricesrv2 = 20;
        } else {
            $ket2 = null;
            $pricesrv2 = 0;
        }

        $total=($roomprice**$duration)+$pricesrv1+$pricesrv2; 
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

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>                
                    <th scope="col">Room Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo rand() . "\n"; ?></th>
                    <td><?= $name ?></td>
                    <td><?= $checkin = date("d/m/Y"); ?></td>
                    <td><?php echo date("d/m/Y", strtotime($checkin. ' + '. $duration. ' days')); ?></td>
                    <td><?= $rmtype ?></td>
                    <td><?= $phone ?></td>
                    <td>
                            <?php
                                // echo "<ul>";
                                // $listservices = array($ket1, $ket2);
                                // foreach ($listservices as $value) {
                                //     echo "<li>$value</li>";
                                // }
                                // echo "</ul>";

                                if ($ket1 != null) {
                                    echo"
                                        <ul>
                                            <li>$ket1</li>
                                        </ul>
                                    ";
                                } 
                                if ($ket2 != null) {
                                    echo"
                                        <ul>
                                            <li>$ket2</li>
                                        </ul>
                                    ";
                                } 
                                if (($ket1 || $ket2) == null) {
                                    echo"No Service";
                                }
                            ?>
                    </td>
                    <td>$ <?= $total ?></td>
                </tr>
            </tbody>
        </table>
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