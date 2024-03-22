@extends('employes.layout')
@section('title','Liste Employes')
@section('titre','Home')
@section('content')
<div class='list'>
    @if(count($employes)>0)
        @foreach($employes as $e)
            <a href="{{route('employes.show',['employe'=>$e['id']])}}">
                {{$e['id']}} {{$e['name']}} {{$e['Salaire']}}
            </a>
        @endforeach
    @else
        <p>Aucun employes</p>    
    @endif        
</div>
@endsection