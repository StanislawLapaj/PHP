<?php
    foreach($_POST as $key => $value)
    {
        if(empty($value))
        {
           echo "<script> history.back(); </script>";  
        }
        
    }
    echo "Dane użytkownika:<br>";
    switch($_POST['session'])
    { 
        case '1':
            $date="30.03.2022";
            break;
        case '2':
            $date="15.04.2022";
            break;
        default:
            $date="Anonymous";
            break;
    }
echo <<< DATA
    Company: $_POST[company]<br>
    First and Last Name: $_POST[fname] $_POST[lname]<br>
    E-mail Address: $_POST[mail]<br>
    Title: $_POST[title]<br>
    Phone: $_POST[phone]<br>
    Date: $date<br>
    Job Function: $_POST[function]<br>
    Diet: $_POST[diet]<br>
    Expectations: $_POST[exp]<br>
DATA;
?>
