@if (!empty($sliders))
    <section id="slider" class="slider-content py-5 unique-color-dark">
        <div id="sliderIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators slider-indicators">
                @for ($i = 0; $i < $sliders_count; $i++)
                    <li data-target="#sliderIndicators" data-slide-to="{{ $i }}" @if($i==0) class="active" @endif ></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="carousel-item  @if($slider->position == 1) active @endif">
                        <div class="container">
                            <div class="row justify-content-around align-items-center space-ned">
                                <div class="col-lg-5 col-md-7 col-sm-12">
                                    <h5 class="text-warning"> {{$slider->title}}</h5>
                                    <p class="text-white-50"> {{$slider->description}} </p>
                                    <a href="{{$slider->url}}" class="btn btn-outline-default btn-sm rounded waves-effect" target="blank"> {{$slider->btn_title}} </a>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-12">
                                    <img src="{{asset($slider->image)}}" class="d-block img-fluid slider-image" alt="{{$slider->nick}}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#sliderIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sliderIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
@endif
