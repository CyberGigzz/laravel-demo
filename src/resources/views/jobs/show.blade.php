<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1>{{ $job['title'] }}</h1>
    <p>
        {{ $job['salary'] }}
    </p>

</x-layout>
