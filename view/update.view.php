<?php require '../partials/head.php' ?>
<?php require '../partials/nav.php' ?>


<form action="" method="post">
    <div class="formgroup">
        <label for="title">Title</label>
        <input type="text" name="title" value="<?= $Post['title'] ?>">
    </div>
    <div class="formgroup">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10">
<?= $Post['description'] ?>
        </textarea>
        <input type="hidden" value="<?= $Post['id'] ?>" name="id">
    </div>
    <button type="submit">Update</button>
</form>

<?php require '../partials/footer.php' ?>