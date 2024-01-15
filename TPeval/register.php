<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $nombre = $_POST["nombre"];

    $host = 'e-srv-lamp.univ-lemans.fr';
    $user = 'e2103333';
    $database = 'e2103333';
    $password = 'Cnc761va';
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
    }

    $sql = "INSERT INTO birthday_guest (Nom, Nombre) VALUES ('$nom', $nombre)";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement réussi";

    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }

?>