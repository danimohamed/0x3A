@extends('employes.layout')
@section('title','Show')
@section('titre','Show')
@section('content')
<div class='list'>
    <p>
        {{$employe['id']}} {{$employe['name']}} {{$employe['Salaire']}}

    </p>
</div>
@endsection