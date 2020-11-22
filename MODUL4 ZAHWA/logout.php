<?php
    session_start();
    session_unset();
    session_destroy();

    setcookie('id', '', time()-3600);
    setcookie('mail', '', time()-3600);
    header('location:login.php?alert=logout');

//     if(isset($_SESSION['logintime'])){
//         unset($_SESSION['logintime']);
//         echo "Session Unset";
//     } else {
//         echo "Logout Success";
//     }

    
// include("config/cek_sesi.php");
// unset($_SESSION['username']);
// session_destroy();
// if(!isset($_SESSION['username']))
// {
// 	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
// }
// else
// {
// 	echo "<script>alert('anda gagal logout');</script>";
// }
//
?>