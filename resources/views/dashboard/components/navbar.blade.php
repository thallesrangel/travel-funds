<nav class="col-md-2 d-md-block bg-light sidebar dash-navbar">
    <div class="sidebar-sticky">
        <a class="d-flex justify-content-center" href="{{ route('dashboard') }}">
            <img class="img-fluid logo" src="{{ asset('img/logo.png') }}">
        </a>

        {{-- <p>{{ session('user.name') }}</p> --}}

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('travel*') ? 'active' : '' }}" href="{{ route('travel') }}"><i class="bi bi-pin-angle"></i> Viagens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-wallet"></i> Financeiro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer*') ? 'active' : '' }}" href="{{ route('customer') }}"><i class="bi bi-people"></i> Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-person"></i> Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-gear"></i> Configurações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sign.out') }}"><i class="bi bi-box-arrow-right"></i> Sair</a>
            </li>
        </ul>
    </div>
  </nav>
  