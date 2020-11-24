<?php
include ("config.php");

// $result = mysqli_query($conn, "SELECT * FROM user");

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];

    
    $result = mysqli_query($conn, "SELECT email from user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('email sudah terdaftar')</script>";
    } elseif ($password !== $c_pass) {
        echo "<script>alert('konfirmasi password tidak sesuai')</script>";
        echo "<script>window.location.href='register.php';</script>";
    } else {
        $pw_hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (nama,email,no_hp,password)
                        VALUES ('$nama','$email','$no_hp','$pw_hashed')";
                $ok = mysqli_query($conn,$sql);
            if ($ok) {
                header('location:register.php?alert=berhasil');
            }
            else{
                header('location:register.php?alert=gagal');
            }
        }
    }
?>