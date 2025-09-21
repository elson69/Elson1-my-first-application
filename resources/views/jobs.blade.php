<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <div class="p-4 bg-blue-50 rounded-xl">
                <h2 class="text-lg font-bold">{{ $job->title }}</h2>
                <p class="text-gray-700">Salary: {{ $job->salary }}</p>
                <a href="/jobs/{{ $job->id }}" 
                   class="text-blue-600 hover:underline font-semibold">
                    View Details
                </a>
            </div>
        @endforeach
    </div>
</x-layout>


