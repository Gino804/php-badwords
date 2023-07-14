<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
$censored_paragraph = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Paragrafo originale</h3>
    <p><?= $paragraph ?></p>
    <p>Lunghezza: <?= strlen($paragraph) ?> caratteri</p>

    <hr>
    <h3>Paragrafo censurato</h3>
    <p><?= $censored_paragraph ?></p>
    <p>Lunghezza: <?= strlen($censored_paragraph) ?></p>
</body>

</html>