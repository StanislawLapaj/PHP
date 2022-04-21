<?php
    require_once '../funkcje/cube.php';
    require_once '../funkcje/rectangle.php';
    if(isset($_POST)){
        switch($_POST['geometricFigure']){
            case 'cube':
                if(!$_POST['a'])
                {
                    echo "<script>history.back();</script>";
                    exit();
                }
                $a=$_POST['a'];
                echo "Pole wynosi: ".cube($a);
                break;
            case 'rectangle':
                if(!$_POST['a']&&!$_POST['b'])
                {
                    echo "<script>history.back();</script>";
                    exit();
                }
                $a=$_POST['a'];
                $b=$_POST['b'];
                echo "Pole wynosi: ".rectangle($a,$b);
                break;
                
        }  

    }
?>