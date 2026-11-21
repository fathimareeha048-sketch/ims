@extends('layouts.ims')

@section('content')
    <h2 class="font-bold text-2xl mb-6">Courses</h2>
    <div class="bg-white p-6 rounded shadow">
        <a href="{{ route('courses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add Course</a>
        
        <h3 class="mt-4 font-bold">Total Courses: {{ $courses->count() }}</h3>
        
        <ul class="mt-4 space-y-2">
            @foreach($courses as $course)
                <li class="border-b py-2">- {{ $course->name ?? $course->title ?? 'Course #'.$course->id }}</li>
            @endforeach
        </ul>
    </div>
@endsection