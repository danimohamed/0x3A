@extends('employes.layout')
@section('title','Ajouter Employee')
@section('titre','Create')
@section('content')
<form method="POST" action="{{ route('employes.store') }}">
    @csrf
    <div class="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    
    <div class="">
        <label for="salary">Salary:</label>
        <input type="text" name="salary" id="salary" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection