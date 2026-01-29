<?php
session_start();

if(!empty($_POST)){
    $answer = ($_POST['reponse3']);
    if ($answer === 'c') {
        $_SESSION['score'] += 20 ; 
    } 
}
echo $_SESSION['score'];

