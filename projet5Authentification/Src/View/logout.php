<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<h1 style="text-align: center" >Logout</h1>
<div style="text-align: center">
    <p><?php echo "Bienvenue ".$_SESSION['login'].", ravis de vous revoir!" ?></p>
    </div>
<div style="text-align: center">

<button type="button" class="btn btn-danger btn-lg"> <a style="text-decoration: none; color:black" href="http://stagiaireonze/projet5Authentification/?page=logout&action=disconnect">Logout</a></button>

</div>
</body>
</html>