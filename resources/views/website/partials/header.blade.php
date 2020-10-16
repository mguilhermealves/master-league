<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="{{ Route('home') }}">Master League</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ Route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Campeonatos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu ADM</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ Route('admin.nation.index')}}">Nações</a>
                    <a class="dropdown-item" href="{{ Route('admin.club.index')}}">Clubes</a>
                    <a class="dropdown-item" href="{{ Route('admin.playerposition.index')}}">Posição Jogadores</a>
                    <a class="dropdown-item" href="{{ Route('admin.player.index')}}">Jogadores</a>
                </div>
            </li>
        </ul>
    </div>
</nav>