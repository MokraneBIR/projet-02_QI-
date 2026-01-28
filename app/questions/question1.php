
<?php 
$title = 'Question 1';
require('../shared/openHtml.php'); 
?>
<main>

<div class="container">
    <h2></h2>
    <div class="question1">
        <p> Quel jour serons-nous demain si mercredi était il y a trois jours ?</p>
        <form action="" method="Post">
            <p>
                <label for="reponse1">Réponse : </label>
                <input type="text" name="reponse1" required>
            </p>
            <p><input type="submit" value="Valider" class="submit"   ></p>
        </form> 
    </div>
    
</div>

</main>
<?php require('../shared/closeHtml.php'); ?>
