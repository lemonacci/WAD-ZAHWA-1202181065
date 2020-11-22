<?php 
    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
        exit;
    }
    
    // $_SESSION['id'] = $data['id'];
?>