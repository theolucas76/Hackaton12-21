<?php

$hour = ["12:00", "12:05", "12:10", "12:15", "12:20", "12:25", "12:30", "12:35", "12:40", "12:45", "12:50", "12:55", "13:00"];
$user = ["Jackie","Romuald", "Allison", "Gérard", "Thomas", "Jeanne, 'Janine", "Michel"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php


   if( isset( $_POST['btnSubmit'] ) ) {
       if( isset($_POST['hour']) && isset($_POST['user'])) {
            
            $pdo = new PDO( 'mysql:host=37.187.126.240;port=3306;dbname=hackathon;', 'hackathon', 'c58RqqL7H');
            
            $myQ = $pdo->prepare( 'INSERT INTO booking (time, id_micro, id_user) VALUES (:time, :id_mirco, :id_user) ' );
            $myQ->bindValue(':time', (int)$_POST['hour']);
            $myQ->bindValue(':id_micro', 1);
            $myQ->bindValue( ':id_user', $_POST['user']);
            $myQ->execute();
            
       }
   }
?>


    <form id="validateSlot" method="POST" action="index.php">
        <label for="user-select">Select a user</label>
        <select name="user" id="user-select">
	        <?php foreach($user as $key => $value){ ?>
	            <option value="<?=$key?>"><?=$value?></option>
	        <?php } ?>
        </select>
       
        <label>Pick a date</label>
        <?php foreach($hour as $key => $value){ ?>
            <label for="<?=$key?>"> <?= $value ?> </label>
            <input id="<?=$key?>" name="hour" class="btn btn-danger" data-hour="<?= $value ?>" type="radio" value="<?= $key ?>"/>
        <?php } ?>
        
        <button type="submit" name="btnSubmit">Valider</button>
    </form>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
