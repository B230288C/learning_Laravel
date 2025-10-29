<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <strong>{{$job['title']}}</strong>
    <p>
        This job pay {{$job['salary']}} per year.
    </p>
    
</x-layout>