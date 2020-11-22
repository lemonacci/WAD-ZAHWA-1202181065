<?php
session_start();
include('config.php');
include('header.php');

if (isset($_COOKIE['id']) && isset($_COOKIE['mail'])) {
    // if ($_COOKIE['loggedin'] == 'true') {
    //     $_SESSION['loggedin'] = true;
    // }
    $id = $_COOKIE['id'];
    $mail = $_COOKIE['mail'];

    $result = mysqli_query($conn, "SELECT email FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['email'])) {
        $_SESSION['loggedin'] = true;
    }
}

if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "gagal") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-n4" role="alert">
            Gagal Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "logout") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show mt-n4" role="alert">
            Berhasil Logout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?>

<div class="container">
    <div class="card shadow rounded border-light mt-5 w-50 mx-auto" style="padding: 5% 10%;">
        <form action="login_process.php" method="post">
            <h2 class="text-center">Login</h2>
            <hr>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label">Remember me</label>
            </div>
            <center>
                <button type="submit" class="btn btn-primary mb-3" id="login" name="login">Login</button><br>
            </center>
            <div class="text-center">
                <label>Belum punya akun?</label>&nbsp;<a href="registrasi.php">Registrasi</a>
            </div>
        </form>
    </div>
</div>

<script>
    $('.alert').alert()
</script>
<?php
include('footer.php');
?>