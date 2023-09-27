<?php
    require_once('../source/config.php');

    require_once('../source/data.php');
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Music Library</title>
</head>
<body>
    <header>
        <a class="logo" href="index.php">My Music Library</a>
        <div>
            <a class="a__button" href="terms.php">Terms and Conditions</a>
            <a class="a__button">System Information</a>
        </div>
    </header>
    <main>
        <section class="search">
            <input type="text" placeholder="Search for a product here..." class="searchBar__input">
            <button class="search__button button">Search</button>
        </section>
        <section class="list">
            <?php
                foreach($library as $single){
                    include('../source/view/card.php');
                }
            ?>
        </section>
        
    </main>
    <footer>
        made by Astrid Prins SD2D 2023/2024
    </footer>
</body>
</html>

