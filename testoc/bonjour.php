<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- on veut récupérer les infos transmises par indexURL PR2NOM ET NOM
    on utilise $_GET pour ce faire, on écrit notre html dans lequel on inclu du php.
    on veut que le message utilise les paramètres pour personnaliser le bonjour-->
    <p>
        <!--  
        <?php
        //pour vérifier si une variable existe on utilise la fonction isset()
        if (isset($_GET['prenom']) and isset($_GET['nom'])) {
            echo'bonjour '.$_GET['prenom']. ' ' .$_GET['nom'];
        } else {
            echo 'il faut renseigner un prénom!';
        }
        ?> 
    -->
        <!--parametre repeter que l'on doit incrémenter et boucler-->
        <?php
        $_GET['repeter']=(int) $_GET['repeter'];/*vérifie que repeter est bien un entier
        si ça n'en est pas un ex: grenouille, grenouille sera converti en int 0*/
        if (isset($_GET['prenom']) and isset($_GET['nom'])&& isset($_GET['repeter'])) {
            //on vérifie maintenant que repeter est compris dans un interval défini
            //s'il ne l'était pas l'utilisateur pourrait mettre nimporte quel nombre
            //et faire planter la machine
            if (1<=$_GET['repeter'] && $_GET['repeter']<=25) {
                for ($i=0;$i<$_GET['repeter'];$i++) {
                    echo 'bonjour '.$_GET['prenom']. ' ' .$_GET['nom'].'</br>';
                }
            } else {
                echo 'le nombre de répétition est trop élévé';
            }
        } else {
            echo 'il faut renseigner un prénom, un nom et un nombre de répetitions!';
        }?>
    </p>
    <!-- $_GET permet de créer un tableau associatif entre les paramètres nom/prenom et les valeurs Dupont/Jean , il stocke ces deux infos et on peut les 
    réutiliser à volonté-->
</body>

</html>