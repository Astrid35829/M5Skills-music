<div data-title="<?php echo $single["titel"]; ?>" data-category="<?php echo $single["genre"] ; ?>" class="song">
    <h2><?= $single['titel']; ?></h2>
    <br>
    <h3><?php echo $single['artist']; ?></h3>
    <br>
    <img src="<?php echo $single['image']; ?>" alt="Album cover">
    <br>
    <p><?php echo $single['genre']; ?></p>
</div>