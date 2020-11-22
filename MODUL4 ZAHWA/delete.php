<?php
include("config.php");

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE FROM cart WHERE id = '$id'";
	$qry = mysqli_query($conn, $sql);
	if ($qry) 
	{
		header('location:cart.php?alert=berhasil');
	}
	else
	{
		header('location:cart.php?alert=gagal');
	}
}	else
	{
		header('location:cart.php?alert=notfound');
	}
?>