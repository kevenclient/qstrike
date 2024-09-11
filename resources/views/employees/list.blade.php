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
        <span class="fs-2">Employees</span>
        <a class="btn btn-primary" href="/employees/create" style="height: fit-content;">Create</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="width: 20%;">Factory</th>
                <th scope="col" style="width: 25%;">Firstname</th>
                <th scope="col" style="width: 25%;">Lastname</th>
                <th scope="col" style="width: 10%;">Email</th>
                <th scope="col" style="width: 10%;">Phone</th>
                <th scope="col" style="width: 10%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($employees->isEmpty())
            <tr>
                <td colspan="7" class="align-content-center text-center" style="height: 65px;">
                    No available data
                </td>
            </tr>
            @endif
            @foreach ($employees as $employee)
            <tr>
                <th scope="row" style="padding-top: 15px;">{{ $employee->id }}</th>
                <td style="padding-top: 15px;">{{ $employee->factory?->factory_name }}</td>
                <td style="padding-top: 15px;">{{ $employee->firstname }}</td>
                <td style="padding-top: 15px;">{{ $employee->lastname }}</td>
                <td style="padding-top: 15px;">{{ $employee->email }}</td>
                <td style="padding-top: 15px;">{{ $employee->phone }}</td>
                <td>
                    <form class="d-flex gap-1 m-0" action="/employees/{{ $employee->id }}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-primary" href="/employees/{{ $employee->id }}">View</a>
                        <a class="btn btn-primary" href="/employees/{{ $employee->id }}/edit">Edit</a>
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if ($employees->isNotEmpty())
    <div class="d-flex align-items-center gap-3">
        <a class="btn btn-outline-primary" href="{{ $employees->previousPageUrl() }}">Back</a>
        <span class="text-primary">{{ $employees->firstItem() }} - {{ $employees->lastItem() }} of {{ $employees->total() }}</span>
        <a class="btn btn-outline-primary" href="{{ $employees->nextPageUrl() }}">Next</a>
    </div>
    @endif
</div>
@endsection
