@extends('back.admin')
@section('admin')
<div class="container">


<div class="table-responsive">
        <div class="row">
        <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
        <h6>Slide table</h6>
        <h6 class="text-sm">
            <a href="{{ route('add_slide') }}" class="badge badge-sm bg-gradient-faded-primary">Add New Slide</a>
            </h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
        <thead>
        <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">slide</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Slide number</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit Slide</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete Slide</th>
        </tr>
        </thead>
        <tbody>
            @php($i=1)
            @foreach ($slide as $slide)

        <tr>
        <td>
        <div class="d-flex px-2 py-1">
        <div>
        <img src="{{ $slide->image }}" class="avatar avatar-sm me-3" alt="user1">
        </div>
        <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-sm">{{ $slide->name }}</h6>
        <p class="text-xs text-secondary mb-0">{{ $slide->title }}</p>
        </div>
        </div>
        </td>
        <td scope="row" >
        <p class="text-xs font-weight-bold">{{ $i++ }}</p>
        </td>
        <td class="align-middle text-center text-sm">
        <a href="{{ route('up_slide',$slide->id) }}" class="badge badge-sm bg-gradient-warning">Edit</a>
        </td>
        <td class="align-middle text-center text-sm">
        <a href="{{ route('delete_slide',$slide->id) }}" class="badge badge-sm bg-gradient-danger">Delete</a>
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
