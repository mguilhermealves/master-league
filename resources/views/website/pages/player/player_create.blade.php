@extends('website.layouts.app')

@section('title', '- Criar Jogador')
    
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
                <h1>Criar Jogador</h1>
                <form class="form" action="{{ route('admin.player.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" name="name" class="form-control" placeholder="Digite o nome">
                    </div>

                    <div class="form-group">
                        <label>Overall</label>
                        <input type="number" name="overall" class="form-control" placeholder="Digite a sigla" min="0">
                    </div>

                    <div class="form-group">
                        <label>Posição</label>
                            <select class="form-control" name="position_id">
                                    <option selected disabled>Selecione</option>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->initials }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="form-group">
                        <label>Nacionalidade</label>
                          <select class="form-control" name="nation_id">
                                <option selected disabled>Selecione</option>
                            @foreach ($nations as $nation)
                                <option value="{{ $nation->id }}">{{ $nation->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-success" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection