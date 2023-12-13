<?php include "config\database.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<?php
if (isset($_POST['submit'])) {

    // $name =  htmlspecialchars($_POST['username']);
    // $email = htmlspecialchars($_POST['email']);
    // $feedback =  htmlspecialchars($_POST['feedback']);

    $name = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $feedback = filter_input(INPUT_POST, 'feedback');
}
?>

<body>

    <!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name='pratik'&age=24"> click </a> -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="">
            <label for="username">name:</label>
            <input type="text" name="username">
        </div>
        <div class=""><label for="email">email:</label>
            <input type="email" name="email">
        </div>
        <div class=""><label for="feedback">feedback:</label>
            <input type="text" name="feedback">
        </div>
        <input type="submit" value="submit" name="submit">



    </form>
</body>

</html>