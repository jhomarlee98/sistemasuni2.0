@if(!empty($specialities))
    <section id="specialities" class="container-lg">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4  justify-content-around align-items-center">
            @foreach($specialities as $speciality)
                <div class="col">
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
                                <li class="list-inline-item pr-2 text-danger tached">
                                    S/{{$speciality->price}}
                                </li>
                                <li class="list-inline-item pr-2 text-success">
                                    S/{{($speciality->price)-($speciality->price*0.2)}}
                                </li>
                                <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
                                        </i>21</a></li>
                                <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 col-lg-12">
                <a class="text-center" href="{{route('specialities.call')}}">
                    <h6>
                        Ver todas las especialidades
                    </h6>
                    <h6><i class="fas fa-angle-double-down"></i></h6>
                </a>
            </div>
        </div>
        <hr>
    </section>
@endif
