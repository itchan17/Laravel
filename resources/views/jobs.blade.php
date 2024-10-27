<x-layout>
    <x-slot:heading>Job Listiiiing</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="hover:text-blue-500 hover:underline"><a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}:
                    {{ $job['salary'] }}</a></li>
        @endforeach
    </ul>
</x-layout>
