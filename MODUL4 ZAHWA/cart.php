<?php
include('header_index.php');

$query = "SELECT * FROM cart WHERE user_id = " . $_SESSION['id'];
$select = mysqli_query($conn, $query);
$tmp = mysqli_num_rows($select);

$result = mysqli_query($conn, "SELECT SUM(harga) FROM cart WHERE user_id='".mysqli_real_escape_string($conn, $_SESSION['id'])."'");
$row = mysqli_fetch_array($result);
mysqli_free_result($result);

$total = $row[0];


if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "berhasil") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show mt-n4" role="alert">
            Berhasil Dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
    if ($_GET['alert'] == "gagal") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-n4" role="alert">
            Gagal dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }    
    if ($_GET['alert'] == "notfound") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-n4" role="alert">
            Data tidak ditemukan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?>

<div class="container">
    <div class="row">
        <table class="table table-striped w-75 mx-auto">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                while ($data = mysqli_fetch_assoc($select)) {
            ?>
                <tr>
                    <th><?php echo $no++; ?></th>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus barang ini dari cart?');" class="btn btn-danger">Hapus</a></td>
                </tr>
            <?php } ?>
                <tr>
                    <th scope="row">Total</th>
                    <td></td>
                    <td>Rp <?= $total ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<footer class="fixed-bottom bg-white">
    <p class="text-center">&copy; 2020 Copyright: <a href="index.php">WAD Beauty</a></p>
</footer>

<script>
    $('.dropdown-toggle').dropdown()
</script>
<?php
include('footer.php');
?>