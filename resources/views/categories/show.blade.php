@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Category Details</h2>

    <div class="card mt-4">
        <div class="card-header">
            <h4>{{ $category->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong></p>
            <p>{{ $category->description ?? 'No description available.' }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
            <div>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
