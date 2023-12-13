<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}


?>
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name='pratik'&age=24"> click </a> -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="">
        <label for="name">name:</label>
        <input type="text" name="name">
    </div>
    <div class=""><label for="name">age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" name="submit">



</form>