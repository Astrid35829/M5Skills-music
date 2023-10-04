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
    <script src="main.js" defer></script>
    <title>My Music Library</title>
</head>
<body>
    <header>
        <a class="logo" href="index.php">My Music Library</a>
        <div>
            <a class="a__button" href="index.php">Home</a>
            <a class="a__button" href="terms.php">Terms and Conditions</a>
            <a class="a__button" href="systemInfo.php">System Information</a>
        </div>
    </header>
    <main>
        <section class="filters">
            <div class="search">
                <input id="js--searchBar" type="text" placeholder="Search for a title here..." class="searchBar__input">
            </div>
            
            <div class="dropdown">
                <button id="js-dropdown" class="dropdown__button">Filter</button>
                <div id="js--dropdownOptions" class="dropdown-content">
                    <a id="js--dropdown-1" href="#">Rock</a>
                    <a id="js--dropdown-2" href="#">Pop</a>
                    <a id="js--dropdown-3" href="#">EDM</a>
                    <a id="js--dropdown-all" href="#">All</a>
                    <a id="js--dropdown-close" href="#">Close</a>
                </div>
            </div>
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

