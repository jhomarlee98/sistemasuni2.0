<section id="specialities" class="container-fluid my-3">
    <div class="row justify-content-around">
        <div class="col-xl-10 col-lg-10 col-12">
            @if(!empty($specialities))
                <div class="row justify-content-around my-4">
                    @foreach($specialities as $speciality)
                        <div class="col-12">
                            <h3 class="text-left">
                                {{$speciality->name}}
                            </h3>
                            <hr class="indigo darken-1 accent-2 mb-2 mt-0 d-inline-block mx-auto w-25 py-1 rounded">
                            <p class="text-justify">
                                {{$speciality->description}}
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(!empty($curses))
                 <div class="row justify-content-center">
                     @foreach($curses as $curse)
                         <div class="col-md-6 col-12">
                             <p class="curse-speciality-title mb-0 mt-3">
                                 <a class="btn mdb-color darken-3 text-white btn-block m-0" data-toggle="collapse" href="#Curse_{{$curse->nick}}" role="button" aria-expanded="false" aria-controls="Curse_{{$curse->nick}}">
                                     {{$curse->name}}
                                 </a>
                             </p>
                             <div class="collapse mb-3" id="Curse_{{$curse->nick}}">
                                 <div class="card card-body curse-speciality">
                                     <div class="row align-items-center">
                                         <div class="col-5">
                                             <h6>{{$curse->name}}</h6>
                                             <img src="{{asset($curse->image)}}" alt="{{$curse->nick}}" width="100%">
                                         </div>
                                         <div class="col-7">
                                             <p class="text-curse-speciality text-sm">{{$curse->description}}</p>
                                             <span class="text-sm text-success">
                                                 <i class="{{$curse->icon}}"></i>
                                                 {{$curse->tipe}}
                                             </span>|
                                             <span class="text-sm text-success">
                                                 <i class="fas fa-clock"></i>
                                                 {{$curse->time}} hrs.
                                             </span>|
                                             <span class="text-sm text-success">
                                                 <i class="fas fa-money-bill-wave-alt"></i>
                                                 S/{{$curse->price}}.
                                             </span>
                                         </div>
                                         <div class="col-10">
                                             @include('components.redes-sociales')
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
            @endif
        </div>
    </div>
</section>

