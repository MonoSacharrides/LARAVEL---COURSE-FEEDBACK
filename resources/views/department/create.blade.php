{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Department</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Department Code</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Department</button>
    </form>
</div>
@endsection  --}}
