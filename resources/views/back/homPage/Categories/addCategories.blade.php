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
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('Categories') }}">Categories</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">add Categories</li>
            </ol>
          </nav>
        <form action="{{ route('upload_Categories') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Categories Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    >
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Categories Image </label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3 ">Confirm</button>
            </div>

        </form>
    </div>
@endsection
