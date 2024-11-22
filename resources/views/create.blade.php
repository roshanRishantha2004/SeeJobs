@extends('layout')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-red-600">Post a New Job</h1>
            <p class="text-gray-700 mt-4">Fill in the details below to post a new job listing.</p>
        </div>

        <!-- Job Form -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <form action="/create/post" method="POST">
                @csrf
                <!-- Job Title -->
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Job Title</label>
                    <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" value="{{ old('title') }}" required>
                    @error('title') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Category -->
                <div class="mb-6">
                    <label for="tags" class="block text-gray-700 font-semibold mb-2">Tags</label>
                    <input type="text" name="tags" id="tags" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" value="{{ old('tags') }}" required>
                    @error('tags') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" required>{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Company Name -->
                <div class="mb-6">
                    <label for="company" class="block text-gray-700 font-semibold mb-2">Company</label>
                    <input type="text" name="company" id="company" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" value="{{ old('company') }}" required>
                    @error('company') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Location -->
                <div class="mb-6">
                    <label for="location" class="block text-gray-700 font-semibold mb-2">Location</label>
                    <input type="text" name="location" id="location" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" value="{{ old('location') }}" required>
                    @error('location') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" value="{{ old('email') }}" required>
                    @error('email') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Website -->
                <div class="mb-6">
                    <label for="website" class="block text-gray-700 font-semibold mb-2">Website (Optional)</label>
                    <input type="url" name="website" id="website" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" value="{{ old('website') }}">
                    @error('website') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-red-600 text-white py-3 px-6 rounded-full shadow-md hover:bg-red-700 transition">
                        Post Job
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
