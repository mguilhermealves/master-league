@extends('website.layouts.app')

@section('title', '- Criar Posição')
    
@section('content')
    @if ($errors->any())    
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{$error}} <br />
            @endforeach
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Criar Posição</h1>
                <form class="form" action="{{ route('admin.playerposition.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" name="name" class="form-control" placeholder="Digite o nome">
                    </div>

                    <div class="form-group">
                        <label>Sigla</label>
                        <input type="text" name="initials" class="form-control" placeholder="Digite a sigla">
                    </div>

                    <button class="btn btn-success" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection