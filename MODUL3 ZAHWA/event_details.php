<?php
include('config.php');
include('header.php');

$id = $_GET['id'];

#-----------------UPDATE----------------------
$sql = "SELECT * FROM event WHERE id = '$id'";
$qry = mysqli_query($conn, $sql);
$jml = mysqli_num_rows($qry);
if ($jml > 0) {
    $datae = mysqli_fetch_array($qry);
    // $id = $datae['id'];
    $name = $datae['name'];
    $deskripsi = $datae['deskripsi'];
    $gambar = $datae['gambar'];
    $kategori = $datae['kategori'];
    $tanggal = $datae['tanggal'];
    $mulai = $datae['mulai'];
    $berakhir = $datae['berakhir'];
    $tempat = $datae['tempat'];
    $harga = $datae['harga'];
    $benefit = $datae['benefit'];
} else {
    echo "<script>
	alert('Data yang anda inginkan tidak ada!');
	window.location.href='../event_details.php';
	</script>";
}

#-----------------READ------------------------
$query = "SELECT * FROM event WHERE id = '$id'";
$select = mysqli_query($conn, $query);
$jml = mysqli_num_rows($select);
if ($jml > 0) {
    $data = mysqli_fetch_array($select);
}
?>

<div class="container">
    <center>
        <h4 class="text-primary mb-5">Detail Event!</h4>
    </center>

    <div class="row card-deck">
        <div class="col"></div>
        <div class="col-7">
            <div class="card shadow rounded w-100">
                <img src="assets/uploaded/<?= $data['gambar'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['name']; ?></h5>
                </div>
                <div class="card-custom mb-min"><b>Deskripsi</b></div>
                <div class="card-custom"><?php echo $data['deskripsi']; ?></div>
                <div class="row">
                    <div class="col">
                        <div class="card-custom mb-min"><b>Informasi Event</b></div>
                        <div class="card-custom">
                            <span class="fa fa-calendar" style="color: orange;"></span>&nbsp;&nbsp;<?php echo $data['tanggal']; ?>
                        </div>
                        <div class="card-custom">
                            <span class="fa fa-map-marker" style="color: orange;"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['tempat']; ?>
                        </div>
                        <div class="card-custom">
                            <span class="fa fa-clock-o" style="color: orange;"></span>&nbsp;&nbsp;
                            <?php echo $data['mulai'];
                                echo " - "; 
                                echo $data['berakhir'];
                            ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-custom mb-min"><b>Benefit</b></div>
                        <div class="card-custom">
                            <ul>
                                <?php
                                $array =  explode(',', $data['benefit']);

                                foreach ($array as $item) {
                                    echo "<li>$item</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-custom"><b>Kategori:</b> Online</div>
                <div class="card-custom"><b>HTM Rp <?php echo $data['harga']; ?></b></div>
                <div class="p-3 mx-auto">
                    <button type="button" class="btn btn-primary" style="width: 100px!important;" data-toggle="modal" data-target="#staticBackdrop">Edit</button>&nbsp;&nbsp;

                    <a href="event_delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Apa anda yakin ingin menghapus data?');" class="btn btn-danger" style="width: 100px!important;">Delete</a>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<form action="event_edit_process.php" method="get" enctype="multipart/form-data">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Content Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row card-deck w-100">
                        <div class="col">
                            <div class="card rounded w-100">
                                <div class="card-custom bg-danger p-3"></div>
                                <div class="card-body">
                                    <form>
                                        <input type="hidden" name="id" value="<? $id ?>">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="namea" id="namea" value="<?= $name ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $deskripsi ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Gambar</label>
                                            <div class="input-group input-file mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input form-control" name="gambar" id="gambar">
                                                    <label class="custom-file-label" for="gambar"><?= $gambar ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            if ($kategori == "Online") {
                                                echo '
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Online" checked />
                                                    <label class="form-check-label">Online</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Offline">
                                                    <label class="form-check-label">Offline</label>
                                                </div>
                                                ';
                                            } elseif ($kategori == "Offline") {
                                                echo '
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Online">
                                                    <label class="form-check-label">Online</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Offline" checked />
                                                    <label class="form-check-label">Offline</label>
                                                </div>
                                                ';
                                            } else {
                                                echo '
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Online">
                                                    <label class="form-check-label">Online</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Offline">
                                                    <label class="form-check-label">Offline</label>
                                                </div>
                                                ';
                                            }
                                            ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded w-100">
                                <div class="card-custom bg-primary p-3"></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $tanggal ?>">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Jam Mulai</label>
                                            <select id="mulai" name="mulai" class="form-control">
                                                <option value="15:00:00" <?php if ($mulai == "15:00:00") {echo "selected";} ?>>15:00</option>
                                                <option value="17:00:00" <?php if ($mulai == "17:00:00") {echo "selected";} ?>>17:00</option>
                                                <option value="19:00:00" <?php if ($mulai == "19:00:00") {echo "selected";} ?>>19:00</option>
                                                <option value="20:00:00" <?php if ($mulai == "20:00:00") {echo "selected";} ?>>20:00</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Jam Berakhir</label>
                                            <select id="berakhir" name="berakhir" class="form-control">
                                                <option value="17:00:00" <?php if ($mulai == "17:00:00") {echo "selected";} ?>>17:00</option>
                                                <option value="19:00:00" <?php if ($mulai == "19:00:00") {echo "selected";} ?>>19:00</option>
                                                <option value="20:00:00" <?php if ($mulai == "20:00:00") {echo "selected";} ?>>20:00</option>
                                                <option value="21:00:00" <?php if ($mulai == "21:00:00") {echo "selected";} ?>>21:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat</label>
                                        <input type="text" class="form-control" name="tempat" id="tempat" value="<?= $tempat ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" name="harga" id="harga" value="<?= $harga ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Benefit</label>
                                    </div>
                                    <div class="form-group">
                                        <?php 
                                            $chkbox=$benefit;
                                            $arr=explode(",",$chkbox);
                                        ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="benefit[]" value="Snacks" <?php if(in_array("Snacks",$arr)){echo "checked";}?>>
                                            <label class="form-check-label">Snacks</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="benefit[]" value="Sertifikat" <?php if(in_array("Sertifikat",$arr)){echo "checked";}?>>
                                            <label class="form-check-label">Sertifikat</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="benefit[]" value="Souvenir" <?php if(in_array("Souvenir",$arr)){echo "checked";}?>>
                                            <label class="form-check-label">Souvenir</label>
                                        </div>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" style="width: 100px!important;" data-dismiss="modal">Cancel</button>&nbsp;
                    <button type="submit" class="btn btn-primary" name="update" style="width: 130px!important;">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })

    $('#gambar').on('change', function() {
        var fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName);
    })
</script>


<?php
include('footer.php');
?>