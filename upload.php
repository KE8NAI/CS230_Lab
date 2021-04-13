<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
<body style="background-color:rgba(110, 77, 77, 0.856);"></body> 
<title>Sick Ass song Reviews- Review your Jamz now!</title>
    <link rel="stylesheet" href="css/profile.css">

    <?php

if(isset($_SESSION['uid'])) {
    $rec_user = $_SESSION['uname'];
    $sqlpro = "SELECT * FROM profiles WHERE uname='$rec_user';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);

    ?>

    <div class="h-50 center-me text-center">
        <div class="my-auto">

            <form class="form-signin" action="includes/review-upload-helper.php" method="get">
                <h2>Greetings <?php echo $rec_user?></h2>
                <div class="form-group">
                    <textarea name="songname" id="songname" cols="40" rows="2" placeholder="Please Enter a song or Album title!"
                        style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="band" id="band" cols="40" rows="2" placeholder="Please Enter a Band!"
                        style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="lkpath"
                        id="lkpath" cols="40" rows="10"
                        placeholder="Please enter a spotify link" style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="rw" id="rw" cols="40" rows="10"
                        placeholder="Please enter your review of the musical work"
                        style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="review-submit"
                        class="btn btn-outline-primary btn-lg btn-block">Upload</button>

                </div>


            </form>

        </div>
    </div>

    <?php

} else {
    header("Location: /login.php?error=NotLoggedIn");
}
?>

</main>