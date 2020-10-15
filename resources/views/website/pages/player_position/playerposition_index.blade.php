@extends('website.layouts.app')

@section('title', ' - Posição de Jogadores')
    
@section('content')
    @if (session('message'))
      <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>  
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Posição do Jogador</h1>

                <a class="btn btn-primary" href="{{ Route('admin.playerposition.create') }}">Criar Posição</a>

                <br>

                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sigla</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($positions as $position)
                            <tr>
                                <td>{{ $position->name }}</td>
                                <td>{{ $position->initials }}</td>
                            </tr>
                        @empty
                            <td colspan="2">Nenhuma nação criada...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection