@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body"> 
                    <p>Olá {{ Auth::user()->name }}, seja bem vindo ao sistema de gestão escolar.</p>
                    <img src ="http://127.0.0.1:8000/storage/aix.png" style="width: 90%; height: 50%;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
