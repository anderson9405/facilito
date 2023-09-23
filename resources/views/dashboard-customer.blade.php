@extends('layouts.app')
@section('title', 'Facilito - Home')

@section('content')
    
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <img class="my-2 img-top-card" width="300px" src="{{ asset('images/elements/dashboard.svg') }}" alt="img-dasboard">
                <div class="card-header-facilito text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        Escritorio
                        |
                        <small>
                            <i class="fa fa-user-ninja"></i> Administrador
                        </small>
                    </h4>
                </div>  
                
                <div class="card-body row">
                {{--  --}}


                </div>

                
            </div>
        </div>
    </div>

@endsection