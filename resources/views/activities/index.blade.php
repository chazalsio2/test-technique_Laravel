@extends('layout.layout')
@section('content')
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Utilisateur</h2></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Ip</th>
                    <th>Date d'inscription</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utilisateurs as $utilisateur)
                <tr>
                    <td>{{ $utilisateur->id }}</td>
                    <td>{{ $utilisateur->pseudo }}</td>
                    <td>{{ $utilisateur->email }}</td>
                    <td>{{ $utilisateur->date_inscription }}</td>
                    <td>
                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>      
            
            @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
@endsection