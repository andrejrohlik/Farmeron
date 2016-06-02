<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>

<p class="boja">
    <?php
    $sql = "DELETE FROM krave WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    echo('Vas unos je obrisan!<br>');
    echo('<a href="index.php">Povratak na prikaz tablice!</a>')
    ?>
</p>
</body>
</html>