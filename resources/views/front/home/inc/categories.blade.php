<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        @foreach ($Categories as $Categories)

        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="{{ route('shop') }}"><img src="{{ asset($Categories->image) }}" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">{{ $Categories->name }}</h5>
            <p class="text-center"><a href="{{ route('shop') }}" class="btn btn-success">Go Shop</a></p>
        </div>
        @endforeach

    </div>
</section>
