<?php require '../partials/head.php' ?>
<?php require '../partials/nav.php' ?>

<div class="card">
    <h1><?= $Post['title'] ?></h1>
    <p><?= $Post['description'] ?></p>
    <a href="/destory?id=<?= $Post['id'] ?>">Delete</a>
    <a href="/update?id=<?= $Post['id'] ?>">Edit</a>
</div>


<?php require '../partials/footer.php' ?>