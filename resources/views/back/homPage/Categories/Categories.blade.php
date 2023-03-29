@extends('back.admin')
@section('admin')
<div class="container">


<div class="table-responsive">
        <div class="row">
        <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
        <h6>Categories table</h6>
        <h6 class="text-sm">
            <a href="{{ route('add_Categories') }}" class="badge badge-sm bg-gradient-faded-primary">Add New Categories</a>
            </h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
        <thead>
        <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categories</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categories number</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit Categories</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete Categories</th>
        </tr>
        </thead>
        <tbody>
            @php($i=1)
            @foreach ($Categories as $Categories)

        <tr>
        <td>
        <div class="d-flex px-2 py-1">
        <div>
        <img src="{{ $Categories->image }}" class="avatar avatar-sm me-3" alt="user1">
        </div>
        <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-sm">{{ $Categories->name }}</h6>
        <p class="text-xs text-secondary mb-0">{{ $Categories->title }}</p>
        </div>
        </div>
        </td>
        <td scope="row" >
        <p class="text-xs font-weight-bold">{{ $i++ }}</p>
        </td>
        <td class="align-middle text-center text-sm">
        <a href="{{ route('up_Categories',$Categories->id) }}" class="badge badge-sm bg-gradient-warning">Edit</a>
        </td>
        <td class="align-middle text-center text-sm">
        <a href="{{ route('delete_Categories',$Categories->id) }}" class="badge badge-sm bg-gradient-danger">Delete</a>
        </td>

        </tr>
        @endforeach

        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
  </div>
</div>
@endsection