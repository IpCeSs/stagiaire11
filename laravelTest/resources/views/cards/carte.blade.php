@extends('layout') @section('content')
<div>

    {{$exocard->title}}</br>
    {{$exocard->annee_de_naissance}}</br>
    {{$exocard->films}}
</div>

@stop