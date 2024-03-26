<?php
    $db = json_decode(file_get_contents('db.json'), true);
    $db = $db['newsletters'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Newsletters</title>
</head>
<body>

    <h1>Sélectionnez une newsletter à envoyer :</h1>
    <form method="POST" action="">
        <select name="newsletter_id">
            <?php foreach ($db as $newsletter){ ?>
                <option value="<?= $newsletter['id'] ?>"><?= $newsletter['title'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Envoyer Newsletter">
    </form>
    
</body>
</html>