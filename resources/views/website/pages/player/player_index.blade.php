@extends('website.layouts.app')

@section('title', ' - Lista Jogadores')
    
@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>  
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Jogadores</h1>

                <a class="btn btn-primary" href="{{ Route('admin.player.create') }}">Criar Jogador</a>

                <br>

                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Overall</th>
                            <th>Posição</th>
                            <th>Nacionalidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($players as $player)
                            <tr>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->overall }}</td>
                                <td>{{ $player->position_player['initials'] }}</td>
                                <td>{{ $player->nationality_player['initials'] }}</td>
                            </tr>
                        @empty
                            <td colspan="4">Nenhuma nação criada...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection