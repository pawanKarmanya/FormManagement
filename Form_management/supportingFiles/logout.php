<?php
if($_GET["id"]==1){
    session_start();
    session_destroy();
    header("Location:../index.php");
    
}


?>