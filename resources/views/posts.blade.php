@extends('layout')

@section('content')

<x-hero />
@if($posts)
    @foreach($posts as $post)
    <div class="mt-8 bg-white shadow-lg rounded-lg border border-gray-300 overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="p-6">
        <!-- Job Title -->
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">
            <a href='/post/{{ $post->id }}'>{{ $post->title }}</a>
        </h3>

        <!-- Tags -->
        <div class="mb-4">
            <span class="inline-block bg-blue-500 text-white py-1 px-3 rounded-full text-sm mr-2">
                {{ $post->tags }}
            </span>
        </div>

        <!-- Description -->
        <p class="text-gray-700 mb-4">
            {{ $post->description }}
        </p>

        <!-- Company Name & Location -->
        <div class="flex items-center text-gray-600 mb-4">
            <span class="font-semibold mr-2">Company:</span>
            <span class="mr-6">{{ $post->company }}</span>
            <span class="font-semibold mr-2">Location:</span>
            <span>{{ $post->location }}</span>
        </div>

        <!-- Email & Website -->
        <div class="flex items-center text-gray-600 mb-2">
            <span class="font-semibold mr-2">Email:</span>
            <a href="mailto:{{ $post->email }}" class="text-blue-500 hover:underline">
                {{ $post->email }}
            </a>
        </div>
        <div>
            <span class="font-semibold mr-2">Website:</span>
            <a href="{{ $post->website }}" target="_blank" class="text-blue-500 hover:underline">
                {{ $post->website }}
            </a>
        </div>
    </div>
</div>

    @endforeach
@else
    <div>No Data</div>
@endif

@endsection
