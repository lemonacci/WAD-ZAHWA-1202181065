<?php
session_start();

include('cek_sesi.php');
include('config.php');

if(isset($_POST['add']))
{
    $user_id = $_SESSION['id'];
	$nama_barang = "Hale Lets Clay!";
    $harga = 129000;    
}

if(isset($_POST['add2']))
{
    $user_id = $_SESSION['id'];
	$nama_barang = "The Ordinary Niacinamide 10% + Zinc 1%";
    $harga = 195000;      
}

if(isset($_POST['add3']))
{
    $user_id = $_SESSION['id'];
	$nama_barang = "Thayers Witch Hazel Toner";
    $harga = 115000;
}
	
$sql = "INSERT INTO cart
VALUES ('','$user_id','$nama_barang','$harga')";

$qry = mysqli_query($conn,$sql);

if($qry)
{
    header('location:index.php?alert=cberhasil');
}
else
{
    header('location:index.php?alert=cgagal');
}
?>