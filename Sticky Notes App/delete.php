<?php

    require_once("db.php");

    if(!isset($_GET['id']))  {
        header("LOCATION: index.php");
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM notes WHERE id = '" .$id . "'  LIMIT 1";
    if(mysqli_query($conn, $sql)) {
        header("LOCATION : index.php");
    }
?>