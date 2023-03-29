<div class="container py-5">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
    <div class="row">



        <div class="col-lg-12">

            <div class="row">
                @foreach ($Shop as $shop)
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <form action="{{ route('cart', $shop->id ) }}" method="POST">
                                @csrf
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="{{ asset($shop->image) }}">
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="{{ route('single_Featured', $shop->id) }}"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><button class="btn btn-success text-white mt-2" type="submit"><i
                                                        class="fas fa-cart-plus"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="hidden" name="size" id="product-size" value="S">
                                <input type="hidden" name="quantity" id="product-quanity" value="1">

                                <div class="card-body">
                                    <a href="{{ route('single_Featured', $shop->id) }}"
                                        class="h3 text-decoration-none">{{ $shop->name }}</a>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        <li>{{ $shop->size }}</li>
                                        <li class="pt-2">
                                            <span
                                                class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center mb-0">{{ $shop->price }}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
            @if (method_exists($Shop,"links"))
            <div>

                {{ $Shop->links() }}
            </div>
            @endif

        </div>

    </div>
</div>
