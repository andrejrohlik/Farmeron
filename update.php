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
    $sql = "UPDATE krave SET dan='" . $_POST['dan'] . "', hrana_silaza='" . $_POST['hrana_silaza'] . "', hrana_zitarice='" . $_POST['hrana_zitarice'] . "', hrana_sijeno='" . $_POST['hrana_sijeno'] . "', voda='" . $_POST['voda'] . "', mlijeko='" . $_POST['mlijeko'] . "' WHERE id = " . $_POST['id'];
    $result = $conn->query($sql);

    header('Location: index.php');
    ?>
</p>
</body>
</html>