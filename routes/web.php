<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Home Page
Route::get('/', function () {
    return view('home');
});

// All Jobs
Route::get('/jobs', function () {
    $jobs = Job::all(); // fetch all jobs
    return view('jobs', compact('jobs')); // pass to view
});

// Single Job (dynamic page)
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); // find job or show 404
    return view('job', compact('job'));
});


