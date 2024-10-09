@extends('front.layouts.app')
@section('main')




<form method="GET" action="{{ route('findjobs.filter') }}">
    <select name="location">
        <option value="">Select Location</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Bangalore">Bangalore</option>
        <!-- Add more locations -->
    </select>

    <input type="number" name="search_radius" placeholder="Search Radius (Miles)">

    <input type="date" name="last_date" placeholder="Last Date">

    <select name="posted_within">
        <option value="">Posted Within</option>
        <option value="7">Last 7 Days</option>
        <option value="30">Last 30 Days</option>
    </select>

    <input type="checkbox" name="walk_in_interview" value="1"> Walk In Interview

    <input type="checkbox" name="work_from_home" value="1"> Work From Home

    <select name="salary_type">
        <option value="INR">INR</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <!-- Add more currencies -->
    </select>

    <input type="range" name="salary_range" min="0" max="10000000" value="0" step="50000">
    <label>Salary Range (Default in INR)</label>

    <button type="submit">Search</button>
    <a href="{{ route('findjobs.clear') }}">
        <button type="button">Clear</button>
    </a>
</form>

<div>
    <h2>Job Listings</h2>
    @foreach($jobs as $job)
        <div>
            <h3>{{ $job->title }}</h3>
            <p>{{ $job->description }}</p>
            <p>{{ $job->location }}</p>
            <p>{{ $job->salary }} {{ $job->currency }}</p>
            <p>{{ $job->experience }} years experience</p>
        </div>
    @endforeach
</div>





@endsection
