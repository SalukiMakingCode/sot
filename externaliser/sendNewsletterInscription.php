<?php
header("Access-Control-Allow-Origin: http://www.schooloftalents.org");

$json = file_get_contents('php://input');
$my_array = json_decode($json,true);

$mail=filter_var($my_array['mail'], FILTER_SANITIZE_STRING);


$add = "info@schooloftalents.org ";		//La variable introduite dans le champ mail
$sujet = "Page Newsletter : contact sur le site school of talents";		//Le sujet du message
//Cr?ation du corps du mail
$message = "Vous avez recu une demande d ajout a la newsletter\n";


$message .= "mail : $mail \n";

//Fin du corps
$entete = "From: SCHOOL_OF_TALENTS_DEMANDE_NEWSLETTER \n";				//En-tete du message

//mail($add, $sujet, $message, $entete);					//Envoie du message

if (mail($add, $sujet, $message, $entete)) {
    echo "ok";
}
else {
    $error = error_get_last();
    echo "Erreur d'envoi du courriel : " . $error['message'];
}

