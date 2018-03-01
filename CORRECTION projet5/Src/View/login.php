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

            <h1>Login</h1>

            <form method="post" action="http://www.miniprojet_5.test/">
                <div class="form-group">
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login" value="<?= (isset($_COOKIE['login'])) ? $_COOKIE['login'] : null ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="text" name="password" id="password" value="<?= (isset($_COOKIE['password'])) ? $_COOKIE['password'] : null ?>">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="remember_me" id="remember_me">
                    <label for="remember_me">Se souvenir de moi</label>
                </div>
                <button type="submit" class="btn btn-primary">Me connecter</button>
            </form>

                </div>
            </div>
        </div>

    </body>
</html>