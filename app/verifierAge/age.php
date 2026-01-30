<?php 
if (!empty($_POST)) {
    if ($_POST['age'] >= 18){
        $hide = 'start';
        $ageNotAccepted ='';
    } else {
        $hide = 'start-hide';
        $ageNotAccepted = '<p class="error-age">Vous devez être majeur pour passer ce test.</p>';
    }
} else {
    $hide = 'start-hide';
    $ageNotAccepted ='';
}


$title = 'Erreur Age';
require('../shared/openHtml.php'); 


?>

    <main>
        <div class="container-age">
            <p class="error-age">Vous devez être majeur pour passer ce test.</p>
            <p>Pour faire passer un test de QI à un enfant, contacter M. Cuy psychologue de l'esprit au 06.01.01.01.01</p> 
            <a href="../index.php">Retour à l'accueil</a>
        </div>
        
    </main>

    <?php require('../shared/closeHtml.php') ?>
    