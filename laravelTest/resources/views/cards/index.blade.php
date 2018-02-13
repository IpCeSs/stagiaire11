@extends('layout')

@section('content')
<h1>All cards</h1>
@foreach ($exoCards as $card)
<div class='links'>
<a  href="/laravelTest/public/cards/{{$card->id}}">{{$card->title}}</a>
</div>
@endforeach
    @stop