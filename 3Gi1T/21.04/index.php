<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="radio" name="geometricFigure" value="cube">Sześcian<br>
        <input type="radio" name="geometricFigure" value="rectangle">Prostokąt<br>
        <input type="submit" value="Prześlij">
    </form>
    <?php
        if(isset($_POST['geometricFigure'])){
            echo '<h3>Oblicz pole</h3><br><form action="../scripts/calculate.php" method="POST">';
                switch($_POST['geometricFigure'])
                {
                    case 'cube':
                        echo '<div class="range"><input type="range" name="a" min="0" max="100"></div><div class="value">100</div><br>';
                        echo '<input type="hidden" name="geometricFigure" value="cube">';
                        echo '<input type="submit" value="Prześlij">';
                        break;
                    case 'rectangle':
                        echo '<input type="range" name="a" min="0" max="100"><br>';
                        echo '<input type="range" name="b" min="0" max="100""><br>';
                        echo '<input type="hidden" name="geometricFigure" value="rectangle">';
                        echo '<input type="submit" value="Prześlij">';
                        break;
                }
            echo '</form>';
        }
    ?>
    <script>
        const slider=document.querySelector("input");
        const value=document.querySelector("value");
        value.textContent=slider.value;
    </script>
</body>
</html>