<?php

session_search();
if(!$_GET['id']){
    header('location: inder.php');
}else{
    if(empty($_SESSION['product_id'])){
        $_SESSION['product_id'] = array();
    }
    array_push($_SESSION['product_id'], $_GET['id']);
    header('location: index.php');
}




?>


