<?php
include('header_index.php');

$query = "SELECT * FROM user";
$select = mysqli_query($conn, $query);

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "berhasil") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Berhasil Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
    if ($_GET['alert'] == "cberhasil") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
    if ($_GET['alert'] == "cgagal") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Gagal menambah ke cart!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?>

<div class="container mb-5">
    <div class="row">
        <div class="card w-75 mx-auto">
            <div class="card-header p-4 text-white" style="background-image: linear-gradient(to right, rgba(255,0,0,0.4), rgba(255,0,0,0.5));">
                <h2 class="text-center">WAD Beauty</h2>
                <p class="text-center">Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
            </div>
            <form action="cart_add.php" method="post">
                <div class="card-group">
                    <div class="card">
                        <img src="assets/41.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Hale Let's Clay!</h5>
                            <p class="card-text">Hale Let's Clay! Licorice, Green tea & Charcoal Clay Mask membantu menutrisi dan membersihkan kulit. Kandungan Kaolin clay dengan lembut mengangkat minyak berlebih dan sisa kotoran lainnya dari kulit. Kandungan Licorice mencerahkan kulit, meredakan inflamasi, dan menenangkan kulit.</p>
                            <h6 class="card-text">Rp 129.000</h6>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="add" name="add" class="btn btn-primary w-100">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/42.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">The Ordinary Niacinamide 10% + Zinc 1%</h5>
                            <p class="card-text">The Ordinary Niacinamide 10% + Zinc 1% dapat membantu mengatasi berbagai masalah kulit, sambil tetap menjaga kelembannya. Kandungan Niacinamide dapat memudarkan noda hitam dan mencerahkan kompleksi kulit, mengontrol produksi sebum (minyak), serta menenangkan kulit sensitif.</p>
                            <h6 class="card-text">Rp 195.000</h6>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="add2" name="add2" class="btn btn-primary w-100">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/43.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Thayers Witch Hazel Toner</h5>
                            <p class="card-text">Thayers Witch Hazel Toner – Unscented menyeimbangkan level pH di kulit dan mengembalikan kadar kelembapannya setelah cuci muka. Kandungan Witch Hazel membantu meredakan inflamasi dan kemerahan di kulit, sekaligus mengangkat minyak berlebih. Kelembapan kulit tentunya tetap terjaga dengan kandungan Glycerin dan Aloe Vera.</p>
                            <h6 class="card-text">Rp 115.000</h6>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="add3" name="add3" class="btn btn-primary w-100">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="fixed-bottom bg-white">
    <p class="text-center mt-2">&copy; 2020 Copyright: <a href="index.php">WAD Beauty</a></p>
</footer>

<script>
    $('.dropdown-toggle').dropdown()
</script>
<?php
include('footer.php');
?>