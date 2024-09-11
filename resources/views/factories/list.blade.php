@extends('layouts.app')

@push('styles')
<style>
nav {
    min-width: 1200px;
}
</style>
@endpush

@section('content')
<div class="mx-auto my-5 px-5" style="min-width: 1200px;max-width: 1200px;">
    <div class="d-flex justify-content-between align-items-end mb-3">
        <span class="fs-2">Factories</span>
        <a class="btn btn-primary" href="/factories/create" style="height: fit-content;">Create</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="width: 30%;">Name</th>
                <th scope="col" style="width: 30%;">Location</th>
                <th scope="col" style="width: 15%;">Email</th>
                <th scope="col" style="width: 15%;">Website</th>
                <th scope="col" style="width: 10%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($factories->isEmpty())
            <tr>
                <td colspan="6" class="align-content-center text-center" style="height: 65px;">
                    No available data
                </td>
            </tr>
            @endif
            @foreach ($factories as $factory)
            <tr>
                <th scope="row" style="padding-top: 15px;">{{ $factory->id }}</th>
                <td style="padding-top: 15px;">{{ $factory->factory_name }}</td>
                <td style="padding-top: 15px;">{{ $factory->location }}</td>
                <td style="padding-top: 15px;">{{ $factory->email }}</td>
                <td style="padding-top: 15px;">{{ $factory->website }}</td>
                <td>
                    <form class="d-flex gap-1 m-0" action="/factories/{{ $factory->id }}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-primary" href="/factories/{{ $factory->id }}">View</a>
                        <a class="btn btn-primary" href="/factories/{{ $factory->id }}/edit">Edit</a>
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if ($factories->isNotEmpty())
    <div class="d-flex align-items-center gap-3">
        <a class="btn btn-outline-primary" href="{{ $factories->previousPageUrl() }}">Back</a>
        <span class="text-primary">{{ $factories->firstItem() }} - {{ $factories->lastItem() }} of {{ $factories->total() }}</span>
        <a class="btn btn-outline-primary" href="{{ $factories->nextPageUrl() }}">Next</a>
    </div>
    @endif
</div>
@endsection
