@extends('website.layouts.app')

@section('title', ' - Nação')
    
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            {{$error}} <br />
        @endforeach
    </div>
    @endif
    @if (session('message'))
      <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>  
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nação</h1>

                <a class="btn btn-primary" href="{{ Route('nation.create') }}">Criar Nação</a>

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
                        @forelse ($nations as $nation)
                            <tr>
                                <td>{{ $nation->name }}</td>
                                <td>{{ $nation->initials }}</td>
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