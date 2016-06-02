<?php require('check.php'); ?>
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
    $sql = "INSERT INTO krave (dan, hrana_silaza, hrana_zitarice, hrana_sijeno, voda , mlijeko) VALUES ('" . $_POST['dan'] . "', '" . $_POST['hrana_silaza'] . "', '" . $_POST['hrana_zitarice'] . "', '" . $_POST['hrana_sijeno'] . "', '" . $_POST['voda'] . "', '" . $_POST['mlijeko'] . "')";
    $result = $conn->query($sql);

    echo('Tvoj unos je unesen!<br>');
    echo('<a href="index.php">Povratak na prikaz tablice</a>');
    ?>
</p>
</body>
</html>