<?php require('check.php'); ?>
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
            <a class="navbar-brand">Farmeron</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="pocetna.php">Početna</a></li>
                <li class="active"><a href="index.php">Prikaz</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Farmeron</h1>
    </div>
</div>
<p>
<form action="insert.php" method="post">
    Dan:<br>
    <input type="text" name="dan"><br>
    Hrana_silaza(kg):<br>
    <input type="text" name="hrana_silaza"><br>
    Hrana_zitarice(kg):<br>
    <input type="text" name="hrana_zitarice"><br>
    Hrana_sijeno(kom):<br>
    <input type="text" name="hrana_sijeno"><br>
    Voda(l):<br>
    <input type="text" name="voda"><br>
    Mlijeko(l):<br>
    <input type="text" name="mlijeko"><br>
    <input type="submit" value="Unesi!">
</form>
</p>


</body>
</html>