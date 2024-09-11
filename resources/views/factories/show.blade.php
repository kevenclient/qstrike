@extends('layouts.app')

@section('content')
<div class="card mx-auto my-5" style="max-width: 550px;">
    <div class="card-body">
        <h5 class="card-title">View Factory</h5>
        <div class="card-text d-flex flex-column gap-3">
            <div>
                <label class="form-label">Name</label>
                <input class="form-control" name="factory_name" value="{{ $factory_name }}" disabled/>
            </div>
            <div>
                <label class="form-label">Location</label>
                <input class="form-control" name="location" value="{{ $location }}" disabled/>
            </div>
            <div>
                <label class="form-label">Email</label>
                <input class="form-control" name="email" value="{{ $email }}" disabled/>
            </div>
            <div>
                <label class="form-label">Website</label>
                <input class="form-control" name="website" value="{{ $website }}" disabled/>
            </div>
            <div class="text-end mb-3">
                <a class="btn btn-link" href="/factories">Cancel</a>
                <a class="btn btn-primary" href="/factories/{{ $id }}/edit">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
