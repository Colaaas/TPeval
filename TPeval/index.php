<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Fête d'anniversaire</title>
</head>

<body>
    <h1>Fête d'anniversaire de Colas</h1>
    <p>Date et heure : le 4 Avril 2024 à 19h</p>
    <p>Thème : Années 80</p>
    <button onclick="displayExplanations()">En savoir plus</button>
    <p id="explanations" style="display: none;">Voyagez dans le temps avec notre soirée Années 80, où la musique rétro, les tenues flashy et les hits emblématiques créent une ambiance électrisante pour une nuit de nostalgie et de divertissement rétro.</p>
    <p>Lieu : <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/" target="_blank">Salle du Jardin des Plantes</a></p>

    <script src="script.js"></script>

    <form action="register.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>
    <label for="nombre">Nombre :</label>
    <input type="number" name="nombre" required>
    <button type="submit">Envoyer</button>
    </form>
    <p>Nombre d'invité : <?php include 'count_guest.php'; ?></p>

</body>