<?php

include "template/header.php";

if(isset($_SESSION['logged_in'])){

    $_SESSION = [];
    $_SESSION['success_massage'] = 'Success Log out';
    header('location:index.php');
    die();

}

include "template/header.php";

?>