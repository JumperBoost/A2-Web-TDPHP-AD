<?php require_once "Voiture.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Voiture</title>
</head>
<body>
<?php
    $voiture1 = new Voiture("BC397WW", "Audi", "Orange", 2);
    echo $voiture1;
?>
</body>
</html>