@section('title')
Cart
@endsection
@extends('front.home')
@section('info')
<div class="container p-5">
    @if (count($Cart) >0 )

<div class="row">
    <div class="col-10">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">size</th>
            <th scope="col">Edit</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
            <?php $totalprice = 0; ?>
            @php($i=1)

            @foreach ($Cart as $cart)
            <?php $totalprice = $totalprice + $cart->total; ?>

    <tr>
        <th scope="row">{{ $i++ }}</th>
        <td><img class="rounded" width="30" src="{{ asset($cart->image) }} " alt="">
            </td>
            <td><span>{{ $cart->name }}</span></td>
        <td>${{ $cart->price }} </td>
        <td>{{ $cart->quantity }}</td>
        <td>{{ $cart->size }}</td>
        <td class=" text-sm">
            <a href="{{ route('single_shop',$cart->id) }}" class="btn btn-success">edit</a>
            </td>
        <td class=" text-sm">
            <a href="{{ route('delete_cart',$cart->id) }}" class="btn btn-danger">delete</a>
            </td>

    @endforeach

        </tbody>
      </table>
</div>
<div class="col-2 pt-5">
    <div class="card container " style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">total price :${{ $totalprice }}</h5>
          <a href="#" class="card-link btn btn-success">buy now</a>

        </div>
      </div>

</div>
</div>
{{ $Cart->links() }}



@else


<div class=" carte text-center">

    <i class="fa-solid fa-circle-exclamation"></i>
    <a class="de" href="{{ route('home') }}">Your cart is currently empty</a>
</div>
@endif
</div>
  @endsection
