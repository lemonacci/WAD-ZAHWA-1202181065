<?php
include('header.php');
?>

<div class="container">
    <h4 class="text-primary mb-5">Buat Event</h4>

    <form action="event_create_process.php" method="post" enctype="multipart/form-data">
        <div class="row card-deck w-100">
            <div class="col">
                <div class="card rounded w-100">
                    <div class="card-header bg-danger"></div>
                    <div class="card-body">
                        <div>
                            <div class="form-group">
                                <label><b>Name</b></label>
                                <input type="text" class="form-control" name="namea" id="namea">
                            </div>
                            <div class="form-group">
                                <label><b>Deskripsi</b></label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mb-0"><b>Upload Gambar</b></label>
                                <div class="input-group input-file mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control" name="gambar" id="gambar">
                                        <label class="custom-file-label" for="gambar">Choose file</label>
                                    </div>
                                </div>
                                <!-- <input type="file" name="gambar" id="gambar" class="form-control"> -->
                            </div>
                            <div class="form-group">
                                <label><b>Kategori</b></label>
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Online">
                                    <label class="form-check-label">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Offline">
                                    <label class="form-check-label">Offline</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded w-100">
                    <div class="card-header bg-primary"></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label><b>Tanggal</b></label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jam Mulai</label>
                                <select id="mulai" name="mulai" class="form-control">
                                    <option value="15:00:00">15:00</option>
                                    <option value="17:00:00">17:00</option>
                                    <option value="19:00:00" selected>19:00</option>
                                    <option value="20:00:00">20:00</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jam Berakhir</label>
                                <select id="berakhir" name="berakhir" class="form-control">
                                    <option value="17:00:00">17:00</option>
                                    <option value="19:00:00">19:00</option>
                                    <option value="20:00:00" selected>20:00</option>
                                    <option value="21:00:00">21:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Tempat</b></label>
                            <input type="text" class="form-control" name="tempat" id="tempat">
                        </div>
                        <div class="form-group">
                            <label><b>Harga</b></label>
                            <input type="text" class="form-control" name="harga" id="harga">
                        </div>
                        <div class="form-group">
                            <label><b>Benefit</b></label>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Snacks" name="benefit[]">
                                <label class="form-check-label">Snacks</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Sertifikat" name="benefit[]">
                                <label class="form-check-label">Sertifikat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Souvenir" name="benefit[]">
                                <label class="form-check-label">Souvenir</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ml-auto">
                        <button type="submit" class="btn btn-primary" name="create" style="width: 100px!important;">Submit</button>&nbsp;&nbsp;
                        <a href="home.php" type="button" class="btn btn-danger" style="width: 100px!important;">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $('#gambar').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>

<?php
include('footer.php');
?>