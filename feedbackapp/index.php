<?php include 'inc/header.php' ?>

<?php
$name = $email = $feedback = "";
$nameErr = $emailErr = $feedbackErr = "";

// form sumit
if (isset($_POST['submit'])) {

    if (empty($_POST["name"])) {
        $nameErr = 'name is require';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["email"])) {
        $emailErr = 'email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST["feedback"])) {
        $feedbackErr = 'feedback is required';
    } else {
        $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($nameErr) && empty($emailErr) && empty($feedbackErr)) {
        // add to the databse
        $sql = "INSERT INTO feedback (name,email,feedback) VALUES('$name','$email','$feedback')";
        if (mysqli_query($con, $sql)) {
            //succes
            echo "suscces";
        } else {
            echo "error:" . mysqli_error($con);
        }
    }
}

?>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
        <h1 style="text-align: center; "> feedback form </h1>

        <div class="ele1">
            <label for="name">name:</label>
            <input type="text" name="name">
            <div style="color: red;">
                <?php echo $nameErr ?>
            </div>
        </div>
        <div class="ele1"><label for="email">email:</label>
            <input type="email" name="email">
            <div style="color: red;">
                <?php echo $emailErr ?>
            </div>
        </div>
        <div class="ele1"><label for="feedback">feedback:</label>
            <input type="text" name="feedback">
            <div style="color: red;">
                <?php echo $feedbackErr ?>
            </div>
        </div>
        <input type="submit" value="submit" name="submit">



    </form>
</body>

</html>