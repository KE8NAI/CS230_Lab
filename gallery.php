<?php
require 'includes/header.php';
?>

<main>
<body style="background-color:rgba(110, 77, 77, 0.856);"></body>
    <title>Rockin Reviews - Reviews System</title>
    <link rel="stylesheet" href="css/gallery.css">

    <div class="about">
        <h1 style="font-size: 48px">Rockin Reviews</h1>
        <p style="font-size: 18px">Browse our Reviews and comment!</p>

    </div>


    <div class="gallery-container">
        <?php
            include_once 'includes/dbhandler.php';
            $sql = "SELECT * FROM songs ORDER BY band DESC";
            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($query)){
                echo '<div class = "card">
                <a href="profile.php?id='.$row['prof'].'">
                <p>'.$row["lkpath"].'</p>
                    <h3>'.$row["songname"].'</h3>
                    <h3>'.$row["band"].'</h3>
                    
                    <p>'.$row["rw"].'</p>
                </a>
                </div>';
            }
        ?>
    </div>

    <div class="footer">
        <footer> Find us on twitter! @josetheman12 </footer>

    </div>

</main>