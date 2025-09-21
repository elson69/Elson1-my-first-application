<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
</head>
<body>
    <h1>All Jobs</h1>

    @if($jobs->count())
        <ul>
            @foreach($jobs as $job)
                <li>
                    <strong>{{ $job->title }}</strong><br>
                    Salary: {{ $job->salary }}<br>
                    Employer: {{ $job->employer->name ?? 'Unknown' }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No jobs found.</p>
    @endif
</body>
</html>

