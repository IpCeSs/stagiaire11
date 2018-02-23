<?php require('Article.php')?>
@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3><b>{{ $article->title }}</b></h3>
            <p><b>{{ $article->content }}</b></p><br>
        </div>
    </div>

@endsection