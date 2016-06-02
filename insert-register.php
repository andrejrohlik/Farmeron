<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Farmeron</title>
</head>

<body>
<h1>
    Farmeron
</h1>

<p>
    <?php
    $sql = "INSERT INTO users (username, password, name , surname) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['name'] . "', '" . $_POST['surname'] . "')";
    $result = $conn->query($sql);

    echo('Vi ste se registrirali. Hvala Vam na tome!<br>');
    echo('<a href="pocetna.php">Povratak na pocetnu stranicu!</a>');
    ?>
</p>
</body>
</html>