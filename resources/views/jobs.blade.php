<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    @foreach ($jobs as $job)
        <div>
            <h2>{{ $job['title'] }} : Pays {{ $job['salary'] }}</h2>
        </div>
    @endforeach
</x-layout>
