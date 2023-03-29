<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
                <p>
                    Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($Featured as $Featured)

            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('single_Featured',$Featured->id) }}">
                        <img src="{{ asset($Featured->image) }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li class="text-muted text-right">price : {{ $Featured->price }}</li>
                        </ul>
                        <a href="{{ route('single_feat',$Featured->id) }}" class="h2 text-decoration-none text-dark">{{ $Featured->name }}</a>
                        <p class="card-text">
                            {{ $Featured->desc }}.
                        </p>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
