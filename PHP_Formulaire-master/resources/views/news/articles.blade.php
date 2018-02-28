
@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Toutes les news</h2>
        </div>
        <div class="panel-body">

            <h3><b>{{ $article['title'] }}</b></h3>
            <p><b>{{ $article['content'] }}</b></p><br>

        </div>
    </div>

@endsection