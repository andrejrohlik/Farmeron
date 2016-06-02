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
                <li class="active"><a href="unos.php">Unos</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Farmeron</h1>
    </div>

    <div>
        <p>
            <div class="sredina">
            <?php

            $sql = "SELECT id, dan, hrana_silaza, hrana_zitarice, hrana_sijeno, voda, mlijeko FROM krave";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table style="border:1px solid yellow;">');
                echo('<tr><th>Dan</th><th>Hrana(silaza/kg)</th><th>Hrana(zitarice/kg)</th><th>Hrana(sijeno/kom bala)</th><th>Voda(l)</th><th>Mlijeko(l)</th></tr>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');

                    echo('<td>' . $row['dan'] . '</td>');
                    echo('<td>' . $row['hrana_silaza'] . '</td>');
                    echo('<td>' . $row['hrana_zitarice'] . '</td>');
                    echo('<td>' . $row['hrana_sijeno'] . '</td>');
                    echo('<td>' . $row['voda'] . '</td>');
                    echo('<td>' . $row['mlijeko'] . '</td>');
                    echo('<td>' . '<a href="delete.php?id=' . $row['id'] . '"><img src="img/delete.gif"></a>' . '</td>');
                    echo('<td>' . '<a href="edit.php?id=' . $row['id'] . '"><img src="img/edit.gif"></a>' . '</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo "Nema podataka!";
            }
            $conn->close();
            ?>
            </div>
        </p>
    </div>

</div><!-- /.container -->


</body>
</html>
