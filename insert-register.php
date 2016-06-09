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
    $sql = "INSERT INTO users (username, password, name , surname) VALUES ('" . htmlspecialchars($_POST['username']) . "', '" . htmlspecialchars($_POST['password']) . "', '" . htmlspecialchars($_POST['name']) . "', '" . htmlspecialchars($_POST['surname']) . "')";
    $result = $conn->query($sql);

    echo('Vi ste se registrirali. Hvala Vam na tome!<br>');
    echo('<a href="pocetna.php">Povratak na pocetnu stranicu!</a>');
    ?>
</p>
</body>
</html>