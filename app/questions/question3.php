<?php
session_start();

if(!empty($_POST)){
    $answer = ($_POST['reponse2']);
    if ($answer == 1500) {
        $_SESSION['score'] += 20 ; 
    } 
}
