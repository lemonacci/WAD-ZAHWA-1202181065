<?php
include('config.php');
include('header_index.php');

$id = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id = '$id'";
$qry = mysqli_query($conn, $sql);
$jml = mysqli_num_rows($qry);

if ($jml > 0) {
    $data = mysqli_fetch_array($qry);
    // $id = $data['id'];
    $nama = $data['nama'];
    $email = $data['email'];
    $no_hp = $data['no_hp'];
    $password = $data['password'];
}

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "berhasil") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show mt-n4" role="alert">
            Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
    if ($_GET['alert'] == "gagal") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-n4" role="alert">
            Gagal Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?>

<div class="container mb-5">
    <form class="w-75 mx-auto" action="profile_edit_process.php" method="post">
        <h2 class="text-center mt-4 mb-4">Profile</h2>
        <input type="hidden" name="id">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label" id="email" name="email"><?= $email ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $no_hp ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password Confirm</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="c_pass" name="c_pass">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Warna Navbar</label>
            <div class="col-sm-10">
                <select id="bg_navbar" name="bg_navbar" class="form-control">
                    <option value="bg-primary" <?php if ($bg_navbar == "bg-primary") { echo "selected"; } ?>>Primary</option>
                    <option value="bg-secondary" <?php if ($bg_navbar == "bg-secondary") { echo "selected"; } ?>>Secondary</option>
                    <option value="bg-success" <?php if ($bg_navbar == "bg-success") { echo "selected"; } ?>>Success</option>
                    <option value="bg-danger" <?php if ($bg_navbar == "bg-danger") { echo "selected"; } ?>>Danger</option>
                    <option value="bg-warning" <?php if ($bg_navbar == "bg-warning") { echo "selected"; } ?>>Warning</option>
                    <option value="bg-info" <?php if ($bg_navbar == "bg-info") { echo "selected"; } ?>>Info</option>
                    <option value="bg-light" <?php if ($bg_navbar == "bg-light") { echo "selected"; } ?> selected>Light</option>
                    <option value="bg-dark" <?php if ($bg_navbar == "bg-dark") { echo "selected"; } ?>>Dark</option>
                    <option value="bg-muted" <?php if ($bg_navbar == "bg-muted") { echo "selected"; } ?>>Muted</option>
                    <option value="bg-white" <?php if ($bg_navbar == "bg-white") { echo "selected"; } ?>>White</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3 mb-3" id="edit" name="edit">Submit</button><br>
        <div class="text-center">
            <a href="index.php" class="text-decoration-none text-reset">Cancel</a>
        </div>
    </form>
</div>

<footer class="bg-white" style="margin-bottom: -11%;">
    <p class="text-center">&copy; 2020 Copyright: <a href="index.php">WAD Beauty</a></p>
</footer>

<script>
    $('.dropdown-toggle').dropdown()
</script>
<?php
include('footer.php');
?>