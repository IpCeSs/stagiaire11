<?php
/*On vérifie qu'il y ait bien un fichier à envoyer
et qu'il n'y a pas d'erreur à l'envoi avec ['error'] qui doit être égal à 0 si tout est ok*/

if (isset($_FILES['monFichier']) && $_FILES['monFichier']['error']==0) 
{
    /*on vérifie que le fichier ne dépasse pas une taille définie*/

    if ($_FILES['monFichier']['size']<=1000000) //CORRESPOND A 1mo
    {
         //ON TESTE L EXTENSION DU FICHIER SI LA TAILLE EST OK
         /*on récupère l'extension du fichier avec ['name']  que l'on met dans une variable. pathinfo()
         renvoie un array avec entre autre l'extension du fichier*/

            $infosFichier=pathinfo($_FILES['monFichier']['name']);

        //du coup on stocke l'extension dans une autre variable, et on pioche
        //dans l'array crée par pathinfo() la partie extension

             $extensionFichier=$infosFichier['extension'];

        //ON CR2E UNE VARIBLE QUI CONTIENT LES EXTENSION AUTORISEES SOUS FORME D ARRAY
               
        $extensionsAutorisees=array('jpg','jpeg','gif','png');

        //on teste donc l'extension de notre fichier avec celle autorisée sans le tableau
        //in_array prend deux param la variable à comparer et la variable a qui la comparer
        
        if(in_array($extensionFichier,$extensionsAutorisees))
        {
            //si c'est bon on utilise move_uploaded_file pour l'enlever du temporaire
            //prend deux paramètres le nom temporaire et chemin qui est le nom sous lequel sera stocké le fichier de façon définitive (peut etre le nom originel)
           //on le stocke dans un fichier upload

          move_uploaded_file($_FILES['monFichier']['tmp_name'],'uploads/'.basename($_FILES['monFichier']['name']));
           
         echo 'l\'envoi a bien été effectué!';
         
        }
        else {
            echo 'Le fichier que vous tentez d\'envoyer n\'a pas la bonne extension';
        }
    } 
    else {
        echo 'Oops le fichier que vous tentez d\'envoyer est trop gros!';
    }
}
