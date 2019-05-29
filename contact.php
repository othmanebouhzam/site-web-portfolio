<?php


      if (isset($_POST['submit'])) {
         $namecontactName = $_POST['namecontactName'];
         $contactEmail = $_POST['contactEmail'];
         $contactSubject = $_POST['contactSubject'];
         $tele = $_POST['tele'];
         $contactMessage= $_POST['contactMessage'];

         $mailto = "othmane.store18@gmail.com";
         $headers = "From :". $contactEmail;
         $txt = "vous avez reçu un message de :  ". $namecontactName . " \n Le message est :  " ."" .$contactMessage. " \n Email est :  " .$contactEmail . "\n Télé : ".$tele;

         mail($mailto, $contactSubject, $txt, $headers);
      }

   echo "Message Envoyer";
   ?>