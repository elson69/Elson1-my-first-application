<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="grid gap-4">
        @foreach($jobs as $job)
           <div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">{{ $job->title }}</h1>

    <p class="text-gray-700 mb-2"><strong>Salary:</strong> {{ $job->salary }}</p>
    <p class="text-gray-700 mb-2"><strong>Employer:</strong> {{ $job->employer->name ?? 'Unknown' }}</p>

    <a href="{{ url('/jobs') }}" class="text-blue-600 hover:underline mt-4 inline-block">← Back to Jobs</a>
</div>
        @endforeach
    </div>
</x-layout>