@extends('layouts.usernav')
<div style="background-color:green; width:100%; position: fixed; color:white;">
    <h3 style="font-weight: bold; color:white; margin-left:2.80in;">Announcements</h3>
</div>
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="card">
        <div class="card-header">
            <h1>{{ $announcement->title }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Date:</strong> {{ $announcement->date }}</p>
            
            <!-- Description with custom CSS for word wrap -->
            <p class="description">
                {{ $announcement->description }}
            </p>

            <a href="{{ route('farmer.announcements.index') }}" class="btn btn-primary">Back to Announcements</a>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .description {
        word-wrap: break-word; /* Allows breaking of long words */
        max-width: 50%; /* Prevents overflow */
        white-space: pre-line; /* Ensures line breaks and multiple spaces are preserved */
    }
</style>
@endsection