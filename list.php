<?php



?>
<!DOCTYPE html>
<html lang="fr">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackaton12-21</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <div class="container p-4">
        <div id="dateheure"></div>
        <div>Vous avez 5 minutes :)</div>
        <div id="time"></div> 
        <button onclick="startTimer(300)">Commencer le timer</button>
        <div>Liste des réservations : </div>
        <ul>
            <?php  ?>
            <li></li>
            <?php  ?>
        </ul>
</body>

</html>