<?php

$nom = "Nazha";
$age = 20;
$ville = "Marrakech";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>

<body>

    <h1>Mon profil</h1>

    <p>
        Bonjour, je m'appelle 
        <?php echo $nom; ?>.
    </p>

    <p>
        J'ai 
        <?php echo $age; ?>
        ans.
    </p>
     <p>J'habite à <?php echo $ville; ?>.</p>
</body>
</html>