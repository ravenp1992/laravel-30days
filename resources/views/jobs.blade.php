<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="underline text-blue-500">
                    <h2>{{ $job['title'] }} : Pays {{ $job['salary'] }}</h2>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
