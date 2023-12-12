<?php
$message = $_GET['message'];
$bad_word = $_GET['bad_word'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>il messaggio originale è:</h2>
    <p><?php echo $message; ?></p>
    <p>il messaggio è lungo: <?php echo strlen($message); ?></p>

    <h2>Frase cambiata:</h2>
    <?php
    $new_message = str_replace($bad_word, '*** ', $message);
    ?>

    <p><?php echo $new_message; ?></p>
    <p>il messaggio è lungo: <?php echo strlen($new_message); ?></p>
</body>

</html>