@extends('layout')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-red-600">About SeeJobs</h1>
            <p class="text-gray-700 mt-4">
                Empowering job seekers and connecting employers with the best talent.
            </p>
        </div>

        <!-- About Content -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Who We Are</h2>
            <p class="text-gray-600 mb-6">
                SeeJobs is your go-to platform for discovering your dream job. Whether you're a seasoned professional or just starting out, we offer opportunities that cater to your ambitions.
            </p>

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Mission</h2>
            <p class="text-gray-600 mb-6">
                Our mission is to bridge the gap between employers and job seekers by providing a seamless platform that fosters growth, learning, and opportunities for all.
            </p>

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Why Choose Us?</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-4">
                <li>Trusted by thousands of job seekers and employers.</li>
                <li>Comprehensive job listings tailored to your career goals.</li>
                <li>User-friendly platform with cutting-edge tools.</li>
            </ul>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <a href="/" class="bg-red-600 text-white py-3 px-6 rounded-full shadow-md hover:bg-red-700 transition">
                Explore Jobs
            </a>
        </div>
    </div>
</div>
@endsection
