<?php require '../partials/head.php' ?>
<?php require '../partials/nav.php' ?>


<form action="" method="post">
    <div class="formgroup">
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div class="formgroup">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Save</button>
</form>

<?php require '../partials/footer.php' ?>