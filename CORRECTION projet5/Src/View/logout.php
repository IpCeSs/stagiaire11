<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1>Logout</h1>
                <p>Bonjour, <?= $_SESSION['login'] ?></p>

                <a href="http://www.miniprojet_5.test/?page=logout&action=disconnect">Me deconnecter</a>

            </div>
        </div>
    </div>

</body>
</html>