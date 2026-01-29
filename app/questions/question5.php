<?php
session_start();

if(!empty($_POST)){
    $answer = ($_POST['reponse4']);
    if ($answer === '2') {
        $_SESSION['score'] += 20 ; 
    } 
}
echo $_SESSION['score'];

