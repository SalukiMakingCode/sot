<?php
header("Access-Control-Allow-Origin: http://www.schooloftalents.org");

$json = file_get_contents('php://input');
$my_array = json_decode($json,true);

$nom=filter_var($my_array['name'], FILTER_SANITIZE_STRING);
$prenom=filter_var($my_array['firstname'], FILTER_SANITIZE_STRING);
$ville=filter_var($my_array['ville'], FILTER_SANITIZE_STRING);
$mail=filter_var($my_array['mail'], FILTER_SANITIZE_STRING);


$add = "info@schooloftalents.org ";		//La variable introduite dans le champ mail
$sujet = "Page Inscription : contact sur le site school of talents";		//Le sujet du message
//Cr?ation du corps du mail
$message = "Vous avez recu un message sur le site school of talents a partir de la page inscription\n";

$message .= "nom et prenom : $nom $prenom \n";

$message .= "ville : $ville \n mail : $mail \n";

//Fin du corps
$entete = "From: SCHOOL_OF_TALENTS_DEMANDE_INSCRIPTION \n";				//En-tete du message

//mail($add, $sujet, $message, $entete);					//Envoie du message

if (mail($add, $sujet, $message, $entete)) {
    echo "ok";
}
else {
    $error = error_get_last();
    echo "Erreur d'envoi du courriel : " . $error['message'];
}
