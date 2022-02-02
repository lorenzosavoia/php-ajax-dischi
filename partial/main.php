<?php
include __DIR__ . '/../server/db.php';
?>

<?php foreach ($response as $card) { ?>
    <div class="col-2 m-2 card">
        <img src="<?= $card['poster'] ?>" alt="">
        <h1 class="title"><?= $card['title'] ?></h1>
        <h5 class="artist"><?= $card['author'] ?></h5>
        <h5 class="age-song"><?= $card['year'] ?></h5>
    </div>
<?php } ?>