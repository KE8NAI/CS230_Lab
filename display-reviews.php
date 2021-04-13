<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "cs230lab";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

$item=$_GET['id'];

$sql = "SELECT * FROM reviews WHERE itemid='$item'";

$result = mysqli_query($conn, $sqli);

if(mysqli_num_rows($result)){
    While ($row = mysqli_fetch_assoc($result)){
    $uname = $row['uname'];
    $propic = "SELECT picpath FROM profile WHERE uname='$uname';";
    $res = mysqli_query($conn, $propic);
    $picpath = mysqli_fetch_assoc($res)['picpath'];
}
}
else{
    echo '<h5 style= "text-align: center;"> No reviews, yet! Be the first!</h5>';
}