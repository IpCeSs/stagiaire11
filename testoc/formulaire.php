<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>travail sur les formulaires et PHP</title>
</head>
<body>
    <form method="post" action="traitementForm.php">
    User name:<br>
  <input type="text" name="username"><br>
  User password:<br>
  <input type="password" name="pw"> <br>
  Aimez-vous les frites ?
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label><br>
<input type='submit' name='submit' value='Submit'>


</form>
</body>
</html>