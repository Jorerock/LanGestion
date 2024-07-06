<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    <h2 class="font-bold text-lg" > {{ $job['title']}}</h2>

    <p>
        this job is paid {{$job['salary']}} per year.
    </p>

</x-layout>