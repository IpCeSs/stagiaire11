@extends('layout')

@section('content')
<h1>All cards</h1>
@foreach ($exoCards as $card)
<div class='links'>
<a  href="/laravelTest/public/cards/{{$card->id}}">{{$card->title}}</a>
</div>
@endforeach
<h3>Ajoutez un acteur</h3>
<form method="post" action="/laravelTest/public/cards/{{$card->id}}/actor">
    <textarea name='title' placeholder="nom et prénom"></textarea></br>
    <textarea name='films' placeholder="films"></textarea></br>
    <textarea name='annee_de_naissance'placeholder="année de naissance"></textarea>
    <div>
    <button type="submit">Add Actor</button>
    </div>
</form>

    @stop