<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmeron</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Farmeron</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="pocetna.php">Početna</a></li>
                <li class="active"><a href="unos.php">Unos</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Farmeron</h1>
    </div>
</div>
<?php
$sql = "SELECT * FROM krave WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
$krava = $result->fetch_assoc();
?>
<p>

<form action="update.php" method="post">
    Dan:<br>
    <input type="text" name="dan" value="<?php echo($krava['dan']); ?>"><br>
    Hrana_silaza:<br>
    <input type="text" name="hrana_silaza" value="<?php echo($krava['hrana_silaza']); ?>"><br>
    Hrana_zitarice:<br>
    <input type="text" name="hrana_zitarice" value="<?php echo($krava['hrana_zitarice']); ?>"><br>
    Hrana_sijeno:<br>
    <input type="text" name="hrana_sijeno" value="<?php echo($krava['hrana_sijeno']); ?>"><br>
    Voda:<br>
    <input type="text" name="voda" value="<?php echo($krava['voda']); ?>"><br>
    Mlijeko:<br>
    <input type="text" name="mlijeko" value="<?php echo($krava['mlijeko']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($krava['id']); ?>">
    <input type="submit" value="Izmijeni!">
</form>
</p>

<p>
    <a href="unos.php">Unos!</a>
</p>
</body>
</html>