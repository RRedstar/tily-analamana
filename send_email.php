<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "radonoela0@gmail.com"; // Adresse e-mail du destinataire
    $subject = "Inscription Loholona";
    
    // Récupération des données du formulaire
    $anarana = $_POST['Anarana'];
    $fanampiny = $_POST['Fanampiny'];
    $fokonolona = $_POST['Fokonolona'];
    $fivondronana = $_POST['Fivondronana'];
    $ambarotonga = $_POST['Ambaratonga'];
    $contact = $_POST['Contact'];

    // Corps de l'e-mail
    $message = "Anarana: $anarana\n
    Fanampiny: $fanampiny\n
    Fokonolona: $fokonolona\n
    Fivondronana: $fivondronana\n
    Ambaratonga: $ambarotonga\n
    Contact: $contact";

    // En-têtes de l'e-mail
    $headers = "From: radonoela0@gmail.com"; // Remplace par l'adresse e-mail de ton site

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }
}
?>