<?php
if (isset($_POST['valider']))
{
if(isset($_POST['email']) AND isset($_POST['lastname']) AND isset($_POST['firstname']) AND isset($_POST['reservation']) AND isset($_POST['hour']) AND isset($_POST['telNo'])){
    if(!empty($_POST['email']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['reservation']) AND !empty($_POST['telNo']))
    {
        $email=htmlspecialchars($_POST['email']);
        $lastName=htmlspecialchars($_POST['lastname']);
        $firstName=htmlspecialchars($_POST['fistname']);
        $reservation=htmlspecialchars($_POST['reservation']);
        $hour=htmlspecialchars($_POST['hour']);
        $tel=htmlspecialchars($_POST['telNo']);
        $text=htmlspecialchars($_POST['message']);
        $message1= "Votre réservation a bien été enregistré à la date de $reservation à $hour au nom de $lastName $firstName. numéro de téléphone : $tel. email: $email";
        $message2 = wordwrap($message1, 70, "\r\n");

        mail('makhloufisami0811@gmail.com', 'Reservation', $message2);
     
        

    }
}
}
?>