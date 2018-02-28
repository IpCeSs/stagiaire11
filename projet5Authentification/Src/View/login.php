<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>

        <h1 style="text-align: center">Login</h1>
        <form method="post" action="?page=login&action=connect">
            <div class="form-group offset-4 col-4">
                <label for="login">Login</label>
                <input type="text" class="form-control" name="login" id="login" placeholder="Entrez votre login">
            </div>
            <div class="form-group offset-4 col-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check"' style="text-align: center">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Se souvenir de moi</label>
            </div>
            <div class="form-controll " style="text-align: center">
                <button type="submit" class="btn btn-success btn-lg" >Login</button>
            </div>
        </form>



    </body>
</html>