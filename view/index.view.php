<?php require '../partials/head.php' ?>
<?php require '../partials/nav.php' ?>

<?php if (empty($posts)) : ?>
    <h1 class="message">There is no Post</h1>
<?php endif ?>



<?php foreach ($posts as $post) : ?>
    <div class="card">
        <h1><?= $post['title'] ?></h1>
        <p><?= $post['description'] ?></p>
        <a href="/show?id=<?= $post['id'] ?>">Read More</a>
    </div>
<?php endforeach ?>

<?php require '../partials/footer.php' ?>