@extends('website.layouts.app')

@section('title', ' - Clubes')
    
@section('content')
    @if (session('message'))
      <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>  
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Clube</h1>

                <a class="btn btn-primary" href="{{ Route('admin.club.create') }}">Criar Clube</a>

                <br>

                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sigla</th>
                            <th>País</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clubs as $club)
                            <tr>
                                <td>{{ $club->name }}</td>
                                <td>{{ $club->initials }}</td>
                                <td>{{ $club->user_id }}</td>
                            </tr>
                        @empty
                            <td colspan="3">Nenhum clube criado...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection