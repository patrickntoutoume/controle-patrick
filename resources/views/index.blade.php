@extends('layout.app')

@section('title','home')

@section('content')
<br><br>
<div class="card text-center">
    <div class="card-header">
       <h4> EVENEMENTS </h4>
    </div>
    <div class="card-body">
   
      <p class="card-text">Bienvenue sur notre site </p>
      <a href="{{route('event')}}" class="btn btn-primary">Cliquez pour ajouter un evenement</a>
    </div>
    <div class="card-footer text-muted">
      
    </div>
  </div>

@endsection
    
