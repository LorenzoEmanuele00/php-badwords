<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dammi una frase e censurero la parola che vuoi</h1>

    <form action="change.php" method="GET">
        <label for="message">messaggio</label>
        <input type="text" id="message" name="message">

        <label for="bad_word">parola</label>
        <input type="text" id="bad_word" name="bad_word">

        <button type="submit">Invia</button>
    </form>

</body>

</html>