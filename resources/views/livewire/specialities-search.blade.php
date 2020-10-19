<section id="specialities" class="container-lg mt-4">
    <div class="row justify-content-around align-items-center bg-light rounded ">
        <div class="col-lg-5 col-md-8 col-sm-8 py-2 my-2 ">
            <label >Nombre de la especialidad</label>
            <input
                wire:model="name"
                type="text"
                class="form-control"
                maxlength="20"
                placeholder="Buscar ..."
            >
        </div>
        <div class="col-lg-5 col-md-8 col-sm-8  py-2 my-2 ">
            <label > Tipo:</label>
            <select
                wire:model="tipe"
                class="browser-default custom-select"
            >
                <option value="" selected>Ver todos ...</option>
                <option value="modulo">Modulos</option>
                <option value="workshops">Workshops</option>
                <option value="certificaciones-internacionales">Certificaciones internacionales</option>
            </select>
        </div>
        <div class="col-10 my-2">
            @if($specialities_lv->count())
                <small id="emailHelp" class="form-text text-success"> Resultados para: <span class="text-dark">{{htmlspecialchars($name)}} - {{$tipe}}</span></small>
            @else
                <small id="emailHelp" class="form-text text-danger"> No se encontrarón resultados para: <span class="text-dark">{{htmlspecialchars($name)}} - {{$tipe}} </span></small>
            @endif
        </div>

    </div>
    <div class="row justify-content-around align-items-center">
        @if(!empty($specialities_lv))
            @foreach($specialities_lv as $speciality)
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8 col-11 ">
                    <div class="card my-3">
                        <div class="view overlay">
                            <img class="card-img-top" src="{{asset($speciality->image)}}" alt="{{$speciality->nick}}">
                            <a href="{{route('specialities.call',$speciality->nick)}}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <a class="btn-floating btn-action ml-auto mr-4 mdb-color unique-color-dark">
                            <i class="fas fa-chevron-right pl-1"></i>
                        </a>
                        <div class="card-body">

                            <h6 class="card-title">{{$speciality->name}}</h6>
                            <hr>
                            <p class="card-text text-content">
                                {{$speciality->description}}
                            </p>
                        </div>
                        <div class="rounded-bottom mdb-color unique-color-dark text-center pt-3">
                            <ul class="list-unstyled list-inline font-small">
                                <li class="list-inline-item text-danger ">
                                    <span class="tached">S/{{$speciality->price}}</span>  <span class="text-success">S/{{($speciality->price)-($speciality->price*0.2)}}</span>
                                </li>
                                <li class="list-inline-item pr-2 text-light">
                                    <i class="{{$speciality->icon}}"></i> {{$speciality->type}}
                                </li>
                                <li class="list-inline-item text-light">
                                    <i class="fas fa-graduation-cap pr-1"> </i> {{$speciality->number}} cursos.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <hr>
</section>
