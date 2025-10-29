<x-layout>
    <x-slot:heading>
        Job listing
    </x-slot:heading>

    <div class="space-y-4">

        @foreach($jobs as $job)
                
                <a href="/jobs/{{$job['id']}}" class="hover:underline hover:text-purple-700 block border border-blue-300 px-4 py-6">
                    <div class="font-bold text-red-700">{{$job->employer->name}}</div>
                    <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year.
                </a>

        @endforeach

        <div>
            {{$jobs->links()}}    
        </div>

    </div>

</x-layout>