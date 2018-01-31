<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon super site</title>
</head>

<body>

    <!-- L'en-tête -->
    <!-- 
        on retire le HEADER et on le remplace par l'include PHP  
        <header>
       
        </header>
    -->
    <?php include('entete.php');?>
    <!-- Le menu -->
    <!--
        ON ENLEVE TOUTE CE QUI SE TROUVE DASN LE MENU ET A LA PLACE ON MET CODE PHP INCLUDE
        <nav id="menu">       
        <div class="element_menu">
            <h3>Titre menu</h3>
            <ul>
                <li><a href="page1.html">Lien</a></li>
                <li><a href="page2.html">Lien</a></li>
                <li><a href="page3.html">Lien</a></li>
            </ul>
        </div>    
        </nav>
    -->
    <?php include("menu.php"); ?>
    <!-- Le corps -->

    <div id="corps">
        <h1>Mon super site</h1>

        <p>
            Bienvenue sur mon super site !
            <br /> Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de
            mon site. :-D
        </p>
    </div>

    <!-- Le pied de page -->
    <!-- 
        ON RETIRE LE CONTENU LE FOOTER ET ON LE REMPLACE PAR L APPEL PHP INCLUDE
        <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
        </footer> 
    -->
    <?php include('pied_de_page.php');?>

</body>

</html>