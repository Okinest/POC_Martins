<?php
    $newsletters = json_decode(file_get_contents('http://51.91.108.32/newsletters'), true);

    if (!empty($newsletters)) {
        foreach ($newsletters as $newsletter) {
            echo "<h2>" . $newsletter['titre'] . "</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Email</th><th>Nom</th></tr>";
            foreach ($newsletter['inscrits'] as $inscrit) {
                echo "<tr><td>" . $inscrit['email'] . "</td><td>" . $inscrit['nom'] . "</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "Aucune newsletter trouvée.";
    }
?>