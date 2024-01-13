<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>

    <form action="signup.php" method="post">
        Username: <input type="text" name="usernameInput">
        <br>
        <br>
        Password: <input type="password" name="passwordInput">
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
        <hr>
    </form>

    <?php
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];

    echo "<h3> Information: </h3>";
    echo "<p> Username: $username </p>";
    echo "<p> Password: $password </p>";
    ?>

</body>

</html>