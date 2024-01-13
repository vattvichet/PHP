<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>

<body>

    <form action="checkBox.php" method="post">
        Dog: <input type="checkbox" name="animals[]" value="Dog">
        <br>
        Fish: <input type="checkbox" name="animals[]" value="Fish">
        <br>
        Capybara: <input type="checkbox" name="animals[]" value="Capybara">
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
        <hr>
    </form>

    <?php
    $animalsChosen = $_POST['animals'];

    $habitats = [
        "Dog" => "Land",
        "Fish" => "Water",
        "Capybara" => "Forest",
    ];
    echo "<h3> Animals you have chosen: </h3>";
    echo "<br>";

    for ($i = 0; $i < count($animalsChosen); $i++) {
        echo "<li>" . $animalsChosen[$i] . "\t\t (Habitat:" . $habitats[$animalsChosen[$i]] . ")" . "<br> </li>";
    }


    ?>

</body>

</html>