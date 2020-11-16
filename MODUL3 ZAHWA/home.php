<?php
include('config.php');
$query = "SELECT * FROM event";
$select = mysqli_query($conn, $query);

include('header.php');
?>

<div class="container">
    <center>
        <h4 class="text-primary mb-5">WELCOME TO EAD EVENTS!</h4>
    </center>

    <div class="row row-cols-1 row-cols-md-4 card-deck">
        <?php
        if ($select) {
            if (mysqli_num_rows($select) > 0) {
                while (!$data = mysqli_fetch_assoc($select)) {
                    echo '
                <div class="col">
                    <div class="card shadow rounded mb-4" style="width: 15rem;">
                        <img src="assets/uploaded/'.$data["gambar"].'" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">'.$data["name"].'</h5>
                        </div>
                        <div class="card-custom">
                            <span class="fa fa-calendar" style="color: orange;"></span>&nbsp;&nbsp;
                            '.$data["tanggal"].'
                        </div>
                        <div class="card-custom">
                            <span class="fa fa-map-marker" style="color: orange;"></span>&nbsp;&nbsp;&nbsp;'.$data["tempat"].'
                        </div>
                        <div class="card-custom">Kategori: '.$data["kategori"].'</div>
                        <div class="p-3 justify-content-end row">
                            <div class="col"></div>
                            <div class="col-7">
                                <a href="event_details.php?id='.$data["id"].'" class="btn btn-primary mr-x w-100">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                ';
                }
            } else {
                echo 'No Events Found';
            }
        }
        ?>
    </div>
</div>


<?php
include('footer.php');
?>