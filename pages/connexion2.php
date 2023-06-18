<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Inscription</title>
    <?php
    include '../ui-kit/head.php';
    ?>
</head>

<body>
<?php
include '../ui-kit/menu.php';
$inscription=1;

var_dump($_POST);

$nom=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$prenom=filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$ville=filter_var($_POST['ville'], FILTER_SANITIZE_STRING);
$mail=filter_var($_POST['mail'], FILTER_SANITIZE_STRING);

var_dump($nom);

$add = "info@schooloftalents.org ";		//La variable introduite dans le champ mail
$sujet = "contact sur le site school of talents";		//Le sujet du message
//Cr?ation du corps du mail
$message = "Vous avez recu un message sur le site school of talents a partir de la page contact\n";

$message .= "nom et prenom : $nom \n";

$message .= "ville : $ville \n mail : $mail \n";

$message .= "mail : $mail \n";
//Fin du corps
$entete = "From: SCHOOL_OF_TALENTS_DEMANDE_INFORMATION \n";				//En-tete du message

//mail($add, $sujet, $message, $entete);					//Envoie du message

if (mail($add, $sujet, $message, $entete)) {
    echo "ok";
}
else {
    $error = error_get_last();
    echo "Erreur d'envoi du courriel : " . $error['message'];
}

?>
<div class="connexion">
    <div class="container-fluid text-center mx-auto">

        <div class="d-flex justify-content-center">

            <div class="svg-decoration col-lg-1 col-xl-3">
                <img src="../img/woman-with-laptop.svg" alt="Une femme sur son pc" />
            </div>

            <div class="register col-12 col-md-12 col-lg-9 col-xl-6  <?php if ($inscription==0) echo "hidden"; else echo "active"; ?>">
                <br/>
                <h1>Informations ou inscription ?</h1>
                <p>Créer votre dossier pour commencer le parcours d'information et de sélection.<br/><br/>
                    Nous vous contacterons en retour.<br/>
                    <!--             Développez des compétences pour aujourd'hui, demain et l'avenir. Une éducation pour préparer votre carrière.-->
                </p>

                <p>Nous avons bien reçu votre demande</p>
                <p>Nous vous contacterons dans les prochains jours</p>
                <p>Merci</p>
            </div>

            <div class="svg-decoration col-lg-0 col-xl-3">
                <img src="../img/man-reads-paper.svg" alt="Un homme qui lit pour s'instruire" />
            </div>

        </div>
    </div>
</div>

<?php
include '../ui-kit/footer.php';
?>

<script src="../js/swipe.js"></script>
</body>

</html>
