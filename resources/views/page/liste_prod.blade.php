@extends('layout.app')

@section('title','liste')

@section('content')

<h1> liste </h1>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card rounded-0 shadow">
                <div class="card-header">
                    <h5>Liste des categories</h5>

                </div>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>DESCRIPTION</th>
                                <th>START DATE </th>
                                <th>END DATE</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Evenements as $Evenement)
                            <tr>
                            <td>{{$Evenement->id}}</td>
                            <td>{{$Evenement->description}}</td>
                            <td>{{$Evenement->Start_date}}</td>
                            <td>{{$Evenement->End_date}}</td>
                            <td>{{$Evenement->price }} dhs</td>
                            <td><a class="btn btn-success btn-sm"  href="{{route ('update',$Evenement->id)}}">modifier</a>
                            <a class="btn btn-danger btn-sm" href="{{route('supprimer',$Evenement->id)}}">supprimer</a>
                            </td>
                        </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection