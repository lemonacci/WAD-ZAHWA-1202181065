<?php
session_start();

include ('config.php');  
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password =  $_POST['password'];

    $qry = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($qry) === 1) {
        $row = mysqli_fetch_assoc($qry);
        if (password_verify($password, $row['password'])) {  

            // $_SESSION['email'] = $data['email'];
            
            $_SESSION['id'] = $row['id'];
            $_SESSION['loggedin'] = true;

            if (isset($_POST['remember'])) {
                setcookie('id', $row['id'], time()+60);
                setcookie('mail', hash('sha256', $row['username'], time()+3600));
            }

            header('location:index.php?alert=berhasil');
        }
        else
        {
            header('location:login.php?alert=gagal');
        }
    }
}
?>