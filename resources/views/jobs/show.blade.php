<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <strong>{{ $job->title }}</strong>
    <p>
        This job pay {{ $job->salary }} per year.
    </p>

    @can('edit',$job)
    <p class="mt-3">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
    @endcan

</x-layout>