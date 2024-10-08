@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="courses text-center p-2">Courses</h1>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="card mb-4 shadow p-3  bg-body-tertiary rounded">
                    <div class="card-body text-center">
                        <h5>{{ $course->course_name }}</h5>
                        <p>Instructor: {{ $course->teacher }}</p>
                        <a href="/courses/{{ $course->id }}" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
