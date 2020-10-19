<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
    <div class="second-color">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Líderes en tecnologías de la información!</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    @include('components.redes-sociales')
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
            <div class="col-md-10 col-lg-4 col-xl-3 mx-auto mb-4">
                <figure class="img-container p-2">
                    <img class="w-75" src="{{ asset('images/sistemasuniblanco.png') }}" alt="logo sistemasuni color blanco fondo transparente">
                </figure>
                <hr class="pink darken-2 accent-2 mb-2 mt-0 d-inline-block mx-auto w-25" >
                <p class="font-small">Instructores altamente calificados, con experiencia en el campo laboral
                    que nos permite brindar unos de los mejores servicios de capacitación  profesional, empresarial e institucional.</p>
            </div>

            <div class="col-md-10 col-lg-4 col-xl-4 mx-auto mb-4">

                <h6 class="text-uppercase font-weight-bold">PARTNERS</h6>
                <hr class="pink darken-2 accent-2 mb-4 mt-0 d-inline-block mx-auto w-25">
                <p>
                    <a href="#!">Cisco Networking</a>
                </p>
                <p>
                    <a href="#!">Oracle Academy </a>
                </p>
                <p>
                    <a href="#!">Microsoft Enterprise</a>
                </p>
                <p>
                    <a href="#!">Person Vue</a>
                </p>
            </div>
            <div class="col-md-10 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                <hr class="pink darken-2 accent-2 mb-4 mt-0 d-inline-block mx-auto w-25" >
                <p>
                    <i class="fas fa-home mr-3"></i> Av. Túpac Amaru 1000 - Rímac Alt. Puerta 5 UNI.
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> informes@sistemasuni.edu.pe
                </p>
                <p class="pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-phone mr-3"></i> 01 200 90 60
                </p>
                <div class="dropdown-menu">
                    <a class="dropdown-item dark-grey-text font-small" href="#">Anexo 1: Informes</a>
                    <a class="dropdown-item dark-grey-text font-small" href="#">Anexo 2: Certificados</a>
                    <a class="dropdown-item dark-grey-text font-small" href="#">Anexo 3: Administración</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© {{date('yy')}} Copyright:
        <a href="https://www.sistemasuni.edu.pe"> Sistemas UNI</a>
    </div>
    <!-- Copyright -->
</footer>
