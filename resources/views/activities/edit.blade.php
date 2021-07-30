@extends('layout.layout')
@section('content')
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Modifier <strong></strong></h2></div>                
                <div class="col-sm-4">
                    <form action="{{ route('user.update',$utilisateurs->id) }}" method="POST">
                        @csrf 
                        @method('PUT')
                   
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nom</strong>
                                    <input type="text" name="pseudo" value="{{ $utilisateurs->pseudo }}" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>email</strong>
                                    <input type="text" name="email" value="{{ $utilisateurs->email }}" class="form-control" placeholder="Prénom">
                                </div>
                            </div>            <div class="col-xs-12 col-sm-12 col-md-12">
                                
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                              <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>                   
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>
@endsection