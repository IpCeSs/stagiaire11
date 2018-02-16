<?php
class Form{
    public $surround='p';
    private $data;
    public function __construct($data=[]){
        $this->data=$data;
}

//on crée une fonction interne à la classe qui va créer des <p> autour des balidses html
private function surround($html){
return"<{$this->surround}>$html</{$this->surround}>";
}
//on crée une fonction priée pour récupérer la valeur du username
private function getValue($index){
       return isset($this->data[$index])? $this->data[$index]:null;
}
    public function input($name){
    return $this->surround("<input type='text' name='".$name."' value=".$this->getvalue($name).">"
    );
}
public function submit(){
        return $this->surround("<button type='submit'>Envoyer</button>");
}
}