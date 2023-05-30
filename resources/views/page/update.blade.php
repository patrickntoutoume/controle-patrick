@extends('layout.app')

@section('title','update')

@section('content')

<h1> Modifier le produit</h1>



<div class="container">
    <div class="row mt-5">
       <div class="col-md-6 offset-md-3">
           <div class="card bg-light">
               <div class="card-body">
                   <form action="{{route('update_event', $Evenement->id)}}" method="POST">
                        
                       @csrf
                       @method('put')
                       <div class="form-group mb-3">
                        <label for="title"> TITLE </label>
                           <input type="text" value="{{ $Evenement->title}}" name="title" id="name" class="form-control  @error( 'title') is-invalid @enderror">
                           @error('title' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror <br>
                           <label for="description"> Description </label>
                           <input type="text" value="{{ $Evenement->description}}" name="description" id="description" class="form-control  @error( 'description') is-invalid @enderror">
                           @error('description' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror
                           <label for="Start_date"> Start Date </label>
                           <input type="date" value="{{$Evenement->Start_date }}" name="Start_date"  class="form-control  @error( 'Start_date') is-invalid @enderror">
                           @error('Start_date' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror
                           <label for="End_date"> End Date </label>
                           <input type="date" value="{{$Evenement->End_date}}" name="End_date"  class="form-control  @error( 'End_date') is-invalid @enderror">
                           @error('End_date' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror
                           <label for="price"> PRICE </label>
                           <input type="price" value="{{$Evenement->price }}" name="price" id="name" class="form-control  @error( 'price') is-invalid @enderror">
                           @error('price' )
                           <span class="text-danger">{{$message}}</span>
                           @enderror <br>
                           
                    
                       </div>
                       <div class="form-group" >
                        <button class="btn btn-dark w-100"> sauvegarder </button>
                    </div>
                   </form>
               </div>
           </div>
       </div>
    </div>
 </div>

@endsection