<nav class="navbar navbar-expand-xl bg-primary-d navbar-dark justify-content-around">
    <a class="navbar-brand col-xl-2 col-lg-6 col-md-6 col-sm-4 col-4 text-center" href="{{asset('')}}">
        <img class="d-none d-lg-inline  w-25" src="{{ asset('images/menu-logo.png') }} " alt="logo sin computadora blanco" >
        <img class="d-lg-none w-75 " src="{{ asset('images/menu-logo.png') }} " alt="logo sin computadora blanco" >
    </a>
    <button class="navbar-toggler col-3  align-items-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav d-none d-lg-flex  mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="horariosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Horarios<span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="horariosDropdown">
                    <a class="dropdown-item text-sm" href="#">Sede Central</a>
                    <a class="dropdown-item text-sm" href="#">Sede San Borja</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-sm" href="#">Eventos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="horariosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Certificaciones
                </a>
                <div class="dropdown-menu" aria-labelledby="horariosDropdown">
                    <a class="dropdown-item text-sm" href="#">PERSON VUE (Centro Autorizado)</a>
                    <a class="dropdown-item text-sm" href="#">Informatica educativa</a>
                    <a class="dropdown-item text-sm" href="#">Capacitación a empresas</a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Talleres</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto d-lg-none text-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-sm" href="#" id="horariosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Horarios<span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="horariosDropdown">
                    <a class="dropdown-item text-sm" href="#">Sede Central</a>
                    <a class="dropdown-item text-sm" href="#">Sede San Borja</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-sm" href="#">Eventos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-sm" href="#" id="horariosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Certificaciones
                </a>
                <div class="dropdown-menu" aria-labelledby="horariosDropdown">
                    <a class="dropdown-item text-sm" href="#">PERSON VUE (Centro Autorizado)</a>
                    <a class="dropdown-item text-sm" href="#">Informatica educativa</a>
                    <a class="dropdown-item text-sm" href="#">Capacitación a empresas</a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-sm" href="#">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-sm" href="#">Talleres</a>
            </li>
        </ul>
        <div class="col-lg-3 col-md-12 col-12 text-center">
            @include('components.redes-sociales')
        </div>
    </div>
</nav>
