@extends('layouts.app')

@section('content')
<div class="card mx-auto my-5" style="max-width: 550px;min-width: 550px;">
    <div class="card-body">
        <h5 class="card-title">View Employee</h5>
        <div class="card-text d-flex flex-column gap-3">
            <div>
                <label class="form-label">Factory</label>
                <select class="form-select" name="factory_id" disabled>
                    <option selected>{{ $factory['factory_name'] ?? null }}</option>
                </select>
            </div>
            <div>
                <label class="form-label">Firstname</label>
                <input class="form-control" name="firstname" value="{{ $firstname }}" disabled/>
            </div>
            <div>
                <label class="form-label">Lastname</label>
                <input class="form-control" name="lastname" value="{{ $lastname }}" disabled/>
            </div>
            <div>
                <label class="form-label">Email</label>
                <input class="form-control" name="email" value="{{ $email }}" disabled/>
            </div>
            <div>
                <label class="form-label">Phone</label>
                <input class="form-control" name="phone" value="{{ $phone }}" disabled/>
            </div>
            <div class="text-end mb-3">
                <a class="btn btn-link" href="/employees">Cancel</a>
                <a class="btn btn-primary" href="/employees/{{ $id }}/edit">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
