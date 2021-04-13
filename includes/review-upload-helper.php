<?php

require 'dbhandler.php';
session_start();


if (isset($_GET['review-submit'])) {

    $songname = $_GET['songname'];
    $band = $_SESSION['band'];
    $lkpath = $_GET['lkpath'];
    $rw = $_GET['rw'];
    $prof = $_SESSION['prof'];
    

        $sql = "INSERT INTO songs (songname, band, lkpath, rw, prof) VALUES ('$songname', '$band', '$lkpath', '$rw', '$prof')";
        
        mysqli_query($conn, $sql);
        header("Location: ../gallery.php?success=UploadWin");
        exit();
} 


        

header("Location: ../gallery.php");
exit();


?>