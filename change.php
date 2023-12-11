<?php
$message = $_GET['message'];
$bad_word = $_GET['bad_word'];

echo $bad_word;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Frase cambiata:</h2>
    <?php
    $new_string = str_replace($bad_word, '***', $message);
    ?>

    <p><?php echo $new_string; ?></p>
</body>

</html>