<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="birthday.css">
    <script src="birthday.js"></script>
</head>
<body>
    <p>ATAUL Asif</p>
    <p>21/09/2024 à 20 h</p>
    <p>thème : "retour vers le futur" <input type="button" onclick="displayExplanations()" value="En savoir plus"></p>
        <ul id="Explanations">
            <li>
                Porter un costume au moins qui pourrait être dans le film "retour vers le futur"
            </li>
            <li>
                Vous pouvez tous venir comme différents Marty McFly tant que vos costumes sont plus ou moins différents
            </li>
            <li>
                Au plus un couple pourront venir habillé comme Rick et morty et pas plus
            </li>
            <li>
                Eviter de tros boire
            </li>
        </ul>
    <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/">Salle municipale, salle du jardin des plantes</a>
    <br>
    <form method="POST" action="register.php" id="guestForm">
        <p>Nom : </p><input type="text" name="guestName">
        <br>
        <p>Age : </p><input type="number" name="guestAge">
        <br>
        <input type="submit">
    </form>
    <?php
        $host='e-srv-lamp.univ-lemans.fr';
        $user = 's186271';
        $database = 's186271';
        $password = 'Efh947cv';

        
    ?>
</body>
</html>