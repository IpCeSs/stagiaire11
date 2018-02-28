<?php


namespace App;
use Illuminate\Database\Eloquent\Model;


class Article extends model
{

protected $fillable=['title','content'];


protected $table='articles';


}