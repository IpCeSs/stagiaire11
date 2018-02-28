<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <title>SuperHeros</title>
</head>
<body style="font-family:'Permanent Marker'">
<h1 id="titre" align="center" style="color:black">SuperHeroes League</h1><br>
<table class="table ">
    <thead class="thead-inverse ">
    <tr>
        <th>#</th>
        <th>SuperHero Name</th>
        <th>Superpower</th>
        <th>Real identity</th>
        <th>City</th>
        <th>Universe</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Superman</td>
        <td>Superstrength, superspeed, superslip</td>
        <td>Clark Kent</td>
        <td>Metropolis</td>
        <td>DC Comics</td>
    </tr>
    </tbody>
</table>
<br><br>
<h4 class="offset-2 text-muted">Add your hero</h4><br>
<form action="#" method="POST">

        <div class="form-group row">
            <label for="name" class="offset-2 col-2 col-form-label">SUPERHERO NAME</label>
            <div class="col-6">
            <input type="text" name="nom" id="name" class="form-control"  >
            </div>
        </div>
    <div class="form-group row">
        <label for="power" class="offset-2 col-2 col-form-label">SUPERPOWER</label>
        <div class="col-6">
        <input type="text" name="pouvoir" id="power" class="form-control"  >
        </div>
    </div>
    <div class="form-group row">
        <label for="identity" class="offset-2 col-2 col-form-label">REAL IDENTITY</label>
        <div class="col-6">
        <input type="text" name="identite" id="identity" class="form-control"  >
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="offset-2 col-2 col-form-label">CITY</label>
        <div class="col-6">
        <input type="text" name="ville" id="city" class="form-control"  >
        </div>
    </div>
        <fieldset class="form-group row">
            <div class="offset-2 col-2">UNIVERSE</div>
            <div class="form-check form-check-inline">
                <label class="form-check-label offset-6">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    MARVEL
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label offset-6">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    DC Comics
                 </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label offset-6">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
                    AUTRE
                </label>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-danger btn-block offset-4 col-4 ">Submit</button>
    </form>


<?php
try{
    $supH=new PDO('mysql:host=stagiaireonze;dbname=superheros;charset=utf8','root','');
}catch(Exception $e){
    die('erreur:'.$e->getMessage());


}
?>
</body>
</html>