<?php
session_start();

include('cek_sesi.php');
include('config.php');

if(isset($_POST['edit']))
{    
	$id = $_SESSION['id'];
	$nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];
    $bg_navbar = $_POST['bg_navbar'];

    if ($password !== $c_pass) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        echo "<script>window.location.href='profile.php';</script>";
    } if (!isset($password)) {
        $sql = "UPDATE user SET nama='$nama', no_hp='$no_hp'
            WHERE id='$id'
        ";

        $qry = mysqli_query($conn,$sql);

        if (isset($_POST['bg_navbar'])) {
            setcookie('bg_navbar', $bg_navbar, time()+3600);
        }

        if($qry)
        {            
            header('location:profile.php?alert=berhasil');
        }
        else
        {            
            header('location:profile.php?alert=gagal');
        }
    } else {
        $pw_hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE user SET nama='$nama', no_hp='$no_hp', password='$pw_hashed' 
            WHERE id='$id'
        ";

        $qry = mysqli_query($conn,$sql);

        if($qry)
        {
            header('location:profile.php?alert=berhasil');
        }
        else
        {            
            header('location:profile.php?alert=gagal');
        }
    }
}
?>
