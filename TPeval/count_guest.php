<?php
    $host = 'e-srv-lamp.univ-lemans.fr';
    $user = 'e2103333';
    $database = 'e2103333';
    $password = 'Cnc761va';
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT Nombre FROM birthday_guest";
    $result = $conn->query($sql);

    $NbInvite = 0;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $NbInvite += $row["Nombre"];
        }
    }
    $conn->close();
    echo $NbInvite;

?>