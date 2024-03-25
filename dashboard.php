
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Identifiants</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Interests</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $newsletters = json_decode(file_get_contents('http://51.91.108.32/newsletters'), true);
                foreach ($newsletters as $newsletter):
            ?>
                <tr>
                    <td><?= $newsletter['id']?></td>
                    <td><?= $newsletter['title']?? "Aucun Titre"?></td>
                    <td><?= $newsletter['content']?? "Aucun Contenu" ?></td>
                    <td>
                     <?php if(isset($newsletter['interests'])): ?>
                        <?php foreach($newsletter['interests'] as $interest): ?>
                            <ul>
                                <?="<li>".$interest ."</li>"?>
                            </ul>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <?= "Aucun Interet" ?>
                    <?php endif; ?>
                    </td>
                    
                    <td><?= $newsletter['status']?? "En Attente" ?></td>
                </tr>
            <?php endforeach;?>
        </tbody>

    </table>
    <?php

        
        if (!empty($newsletters)) {
            
        } else {
            echo "Aucune newsletter trouvée.";
        }
    ?> 
</body>
</html>