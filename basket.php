<?php
    ini_set('display_errors',1);
    session_start(); 
    require_once 'db.php';
    
    require_once 'includes/Winkelmand.php';
    
    $index = $_GET['row'];
    
    $winkelmand=$_SESSION['winkelmand'];        
    
    $winkelmand->toevoegenAanMand($items[$index]);
    
    $_SESSION['winkelmand'] = $winkelmand;
    
?>
