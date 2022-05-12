<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane z bazy</title>
</head>
<body>
    <h3>Użytkownicy</h3>
    <?php
    require_once './scripts/connect.php';
    $sql = "SELECT name,surname,city,colour FROM `user` join city on user.city_id=city.id join colour on user.colour_id=colour.id";
    $result=$connect->query($sql);
    $count=1;
    while ($user=$result->fetch_assoc()) {
        //print_r($user);
        echo "Użytkownik nr $count : <br>".$user['name']." ".$user['surname'];
        $count++;
        echo "<br>Miasto : $user[city]";
        echo "<br>Kolor : $user[colour]";
        echo "<hr>";
    }
    $connect->close();
    ?>
</body>
</html>