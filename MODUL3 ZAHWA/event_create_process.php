<?php
include("config.php");
if(isset($_POST['create']))
{
	$name = $_POST['namea'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = implode(",", $_POST['benefit']);
	
	if(!isset($_FILES['gambar']))
	{
		$sql = "INSERT INTO event 
                        (name,deskripsi,kategori,tanggal,mulai,berakhir,tempat,harga,benefit) 
                VALUES ('$name','$deskripsi','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')";
	}
	else
	{
		$rand = rand();
		$ektensi_yg_diizinkan = array('png','jpg','jpeg');
		$name_foto = $_FILES['gambar']['name'];
		$tmp_foto = $_FILES['gambar']['tmp_name'];
		$size_foto = $_FILES['gambar']['size'];
		$urai = explode('.', $name_foto);
		$ext_file = strtolower(end($urai));

		if(in_array($ext_file, $ektensi_yg_diizinkan) === true)
		{
			if($size_foto<1044070) 
			{
				$xx = $rand.'_'.$name_foto;
				$dir = "assets/uploaded/";		
				$upload = $dir.$name_foto;
				move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/uploaded/'.$rand.'_'.$name_foto);
				
				$sql = "INSERT INTO event 
                                (name,deskripsi,gambar,kategori,tanggal,mulai,berakhir,tempat,harga,benefit) 
                        VALUES ('$name','$deskripsi','$xx','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')";
	    	}
	    	else
	    	{
				echo "<script>
						alert('Ukuran file terlalu besar (maks 1MB) !');
		      		</script>";
				echo "<script>
						window.location.href='event_create.php';
		      		</script>";
	    	}
	    }
	    else
	    {
			echo "<script>
					alert('Ekstensi file tidak diizinkan !');
		      	</script>";
			echo "<script>
					window.location.href='event_create.php';
	      		</script>";
	    }   
	}

	$qry = mysqli_query($conn,$sql);
	if($qry)
	{
		echo "<script>
				alert('Anda berhasil menambah event baru!');
		      </script>";
		echo "<script>
				window.location.href='home.php';
		      </script>";
	}
	else
	{
		echo "<script>alert('Anda gagal tambah data!');</script>";
	}             
}
else
{
	echo "<meta http-equiv='refresh' 
	            content='0; url=event_create.php'>";
}
