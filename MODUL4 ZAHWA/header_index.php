<?php
session_start();

include('cek_sesi.php');
include('config.php');

$sql = "SELECT * FROM user WHERE id = " . $_SESSION['id'];
$qry = mysqli_query($conn,$sql);
$jml = mysqli_num_rows($qry);
if($jml>0)
{
	$data = mysqli_fetch_array($qry);
	$nama = $data['nama'];
}

#nav
$bg_navbar = 'bg-light';

if (isset($_COOKIE['bg_navbar'])) {
    $bg_navbar = $_COOKIE['bg_navbar'];
}

if ($_POST) {
    $bg_navbar = $_POST['bg_navbar'];
} else {
    if (isset($_COOKIE['bg_navbar'])) {
        $_POST['bg_navbar'] = $bg_navbar = $_COOKIE['bg_navbar'];
    }
}

$msg = false;
if (isset($_POST['hapus_cookie'])) {
    setcookie('bg_navbar', '', 0, '/');
    $msg = 'Setting background navbar berhasil dihapus';
}

if (isset($_POST['remember'])) {
    setcookie('bg_navbar', $_POST['bg_navbar'], strtotime('+7 days'), '/');
    $msg = 'Setting background navbar berhasil disimpan';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="assets/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Overpass:wght@400;700&&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="icon" href="assets/logo-ead.png">

    <title>WAD Beauty</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top <?= $bg_navbar ?>">
        <a class="navbar-brand mt-n2" href="index.php">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample08">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item active">
                    <a href="cart.php" class="text-decoration-none text-reset"><i class="fa fa-lg fa-shopping-cart mt-3"></i></a>
                </li>&nbsp;
                <li class="nav-item active">
                    <p class="nav-link mt-1 mr-n2">Selamat Datang,</p>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary mt-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $nama ?>
                    </a>
                    <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>