<?php require '../partials/head.php' ?>
<?php require '../partials/nav.php' ?>


<form action="" method="post">
    <div class="formgroup">
        <label for="title">User Name</label>
        <input type="text" name="userName">
    </div>
    <div class="formgroup">
        <label for="">Email</label>
        <input type="text" name="email">
    </div>
    <div class="formgroup">
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <button type="submit">Create Account</button>
</form>

<?php require '../partials/footer.php' ?>