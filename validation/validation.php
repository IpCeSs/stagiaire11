<form method='post'>
Age :<input type="text" name="age">
<input type='submit'>
</form>
<?php
$age= (int) $_POST['age'];

var_dump($age);


if($age<18){
    echo 'Vous êtes un petit petit!';
}
elseif ($age===18){
    echo 'Vous êtes tout juste majeur, la débauche commence!';
}else{
    echo 'vous avez '.$age.' Vous êtes majeur!';
}