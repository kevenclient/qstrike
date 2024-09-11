@extends('layouts.app')

@section('content')
<div class="card mx-auto my-5" style="max-width: 550px;">
    <div class="card-body">
        <h5 class="card-title">Create Factory</h5>
        <div class="card-text">
            <form class="d-flex flex-column gap-3" action="/factories" method="post">
                @csrf
                <div>
                    <label class="form-label">Name</label>
                    <input class="form-control" name="factory_name" value="{{ old('factory_name') }}"/>
                    @if ($errors->has('factory_name'))
                    <div class="form-text text-danger">{{ $errors->first('factory_name') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Location</label>
                    <input class="form-control" name="location" value="{{ old('location') }}"/>
                    @if ($errors->has('location'))
                    <div class="form-text text-danger">{{ $errors->first('location') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" value="{{ old('email') }}"/>
                    @if ($errors->has('email'))
                    <div class="form-text text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Website</label>
                    <input class="form-control" name="website" value="{{ old('website') }}"/>
                    @if ($errors->has('website'))
                    <div class="form-text text-danger">{{ $errors->first('website') }}</div>
                    @endif
                </div>
                <div class="text-end">
                    <a class="btn btn-link" href="/factories">Cancel</a>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
