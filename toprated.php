<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Duru+Sans&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    
        <div class="headertitle"><ion-icon name="apps" id="logo"></ion-icon>Lync Place</div>
        <div class="headeroptions">
            <div class="headeroption" ><a href="index.php">Home</a></div>
            <div class="headeroption"><a href="featured.php">Featured</a></div>
            <div class="headeroption currentpage"><a href="toprated.php">Top Rated</a></div>
        </div>
    </header>
    <main>

        <div class="container">
        <?php
            require_once("inc/spawnToprated.php");
        ?>
        
        </div>
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>