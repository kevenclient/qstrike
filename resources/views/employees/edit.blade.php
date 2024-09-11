@extends('layouts.app')

@section('content')
<div class="card mx-auto my-5" style="max-width: 550px;min-width: 550px;">
    <div class="card-body">
        <h5 class="card-title">Edit Employee</h5>
        <div class="card-text">
            <form class="d-flex flex-column gap-3" action="/employees/{{ $id }}" method="post">
                @csrf
                @method('put')
                <div>
                    <label class="form-label">Factory</label>
                    <select class="form-select" name="factory_id">
                        <option selected hidden></option>
                        @foreach ($factories as $option)
                        <option value="{{ $option->id }}" @if ($option->id == old('factory_id', $factory['id'] ?? null)) selected @endif>
                            {{ $option->factory_name }}
                        </option>
                        @endforeach
                    </select>
                    @if ($errors->has('factory_id'))
                    <div class="form-text text-danger">{{ $errors->first('factory_id') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Firstname</label>
                    <input class="form-control" name="firstname" value="{{ old('firstname', $firstname) }}"/>
                    @if ($errors->has('firstname'))
                    <div class="form-text text-danger">{{ $errors->first('firstname') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Lastname</label>
                    <input class="form-control" name="lastname" value="{{ old('lastname', $lastname) }}"/>
                    @if ($errors->has('lastname'))
                    <div class="form-text text-danger">{{ $errors->first('lastname') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" value="{{ old('email', $email) }}"/>
                    @if ($errors->has('email'))
                    <div class="form-text text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div>
                    <label class="form-label">Phone</label>
                    <input class="form-control" name="phone" value="{{ old('phone', $phone) }}"/>
                    @if ($errors->has('phone'))
                    <div class="form-text text-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="text-end">
                    <a class="btn btn-link" href="/employees">Cancel</a>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
