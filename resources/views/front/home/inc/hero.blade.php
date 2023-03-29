<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
 
    <div class="carousel-inner">
        @foreach ($slide as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset($slider->image) }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">{{ $slider->name }}</h1>
                                <h3 class="h2">{{ $slider->title }}</h3>
                                <p>
                                    {{ $slider->desc }}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
