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
        <h1>My Music Library</h1>
        <div>
            <button class="button">Terms and Conditions</button>
            <button class="button">System Information</button>
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
                
                for ($i=0; $i < 9; $i++){
                    include('../source/view/card.php');
                }
            ?>
        </section>
        
    </main>
</body>
</html>

