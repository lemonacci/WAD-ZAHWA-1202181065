<?php
include("config.php");

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$sql = "DELETE FROM event WHERE id !='$id'";
	$qry = mysqli_query($conn, $sql);
	if ($qry) 
	{
		echo "<script>alert('Menghapus Data Event dengan ID $id Berhasil');</script>";
		echo "<script>window.location.href='home.php';</script>";
	}
	else
	{
		echo "<script>alert('Anda Gagal Menghapus Data!')</script>";
		echo "<script>window.location.href='home.php';</script>";
	}
}	else
	{
		echo "<script>alert('Data Tidak Ditemukan!')</script>";
		echo "<script>window.location.href='home.php';</script>";
	}
?>