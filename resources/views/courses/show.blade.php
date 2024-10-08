@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-back">
    <div class="feedback">
    <h1>{{ $course->course_name  }} - Feedback</h1>
    <p>Instructor: {{ $course->teacher}}</p>
    </div>
    <div class="text-center mt-2 mb-4 back-btn">
        <a href="javascript:history.back()" class="btn p-2.5 bg-primary text-white backbtn">Back</a>
    </div>
    </div>
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="/courses/{{ $course->id }}/feedback" method="POST">
        @csrf
        <div class="form-group">
            <label for="rating">Rating (1-5)</label>
            <input type="number" name="rating" class="form-control" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="anonymous" class="form-check-input" id="anonymous">
            <label class="form-check-label" for="anonymous">Submit as Anonymous</label>
        </div>
        <button type="submit" class="btn btn-success">Submit Feedback</button>
    </form>

    <hr>

    <h2>Previous Feedback</h2>
    @foreach($course->feedbacks as $feedback)
        <div class="feedback mt-3">
            <p><strong>Rating:</strong> {{ $feedback->rating }} / 5</p>
            <p>{{ $feedback->anonymous ? 'Anonymous' : 'Student' }} says: {{ $feedback->feedback }}</p>
        </div>
        <hr>
    @endforeach
</div>
@endsection

<style>
    .container-back{
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
</style>
