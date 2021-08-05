@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="d-flex justify-content-center">Cadastrar turma.</p>
                </div>
                <div class="card-body"> 
                    
                    <form>
                        <div class="form-group row">
                            <label for="inputNameTurma" class="col-sm-2 col-form-label">Turma:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNameTurma" placeholder="Nome da turma">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Salvar</button>

                    </form>
                    <!--
                        <img src ="http://127.0.0.1:8000/storage/aix.png" style="width: 90%; height: 50%;">
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection