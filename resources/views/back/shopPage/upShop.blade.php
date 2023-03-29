@extends('back.admin')
@section('admin')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
<nav aria-label="breadcrumb" class="m-2">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('Shop') }}">Shop</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">edit Product</li>
    </ol>
  </nav>
    <form action="{{ route('edit_Shop', $Shop->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" name="name" value="{{ $Shop->name }}" class="form-control" id="exampleFormControlInput1"
               >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product price</label>
            <input type="text" name="price" value="{{ $Shop->price }}" class="form-control"
                id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product size</label>
            <input type="text" name="price" value="{{ $Shop->size }}" class="form-control"
                id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Product Image </label>
            <img src="{{ asset($Shop->image) }}" width="150px" height="150px">
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Product a description</label>
            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="desc" id=""
                cols="30" rows="4">{{ $Shop->desc }}</textarea>

        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3 ">Confirm</button>
        </div>

    </form>
</div>
@endsection
