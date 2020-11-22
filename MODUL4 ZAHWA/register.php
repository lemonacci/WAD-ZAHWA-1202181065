<?php
include('config.php');


if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "berhasil") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show mt-n4" role="alert">
            Berhasil Registrasi! Login di <a href="login.php" class="alert-link">sini</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
    if ($_GET['alert'] == "gagal") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-n4" role="alert">
            Gagal Registrasi!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}

include('header.php');
?>

<div class="container">
    <div class="card shadow rounded border-light mt-5 w-50 mx-auto" style="padding: 5% 10%;">
        <form action="register_process.php" method="post">
            <h2 class="text-center">Registrasi</h2>
            <hr>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" name="email"  placeholder="Masukkan Alamat Email" required>
            </div>
            <div class="form-group">
                <label>No. Handphone</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp"  placeholder="Masukkan Nomor Handphone" required>
            </div>
            <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Buat Kata Sandi" required>
            </div>
            <div class="form-group">
                <label>Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="c_pass" name="c_pass" placeholder="Konfirmasi Kata Sandi" required>
            </div>
            <center>
                <button type="submit" class="btn btn-primary mb-3" id="register" name="register">Register</button><br>
            </center>
            <div class="text-center">
                <label>Sudah punya akun?</label>&nbsp;<a href="login.php">Login</a>
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