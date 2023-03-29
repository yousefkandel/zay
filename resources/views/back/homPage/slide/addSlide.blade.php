@extends('back.admin')
@section('admin')
    <div class="container mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <nav aria-label="breadcrumb" class="m-2">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('slide') }}">slide</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">add slide</li>
            </ol>
          </nav>
        <form action="{{ route('upload_slide') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Slide Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Slide Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                  >
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Slide Image </label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Slide a description</label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="desc" id=""
                    cols="30" rows="4"></textarea>

            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3 ">Confirm</button>
            </div>

        </form>
    </div>
@endsection