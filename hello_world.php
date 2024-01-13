<!DOCTYPE html>
<html>

<body>

    <form action="hello_world.php" method="get">
        Username: <input type="text" name="usernameInput">
        <br><br>
        Address: <input type="text" name="addressInput">
        <br><br>
        <input type="submit">
        <br>
        <hr>
    </form>
    <br>

    <?php
    $username = $_GET['usernameInput'];
    $address = $_GET['addressInput'];
    //
    echo "Hello, My name is $username. Currently living at $address."
    ?>



</body>

</html>