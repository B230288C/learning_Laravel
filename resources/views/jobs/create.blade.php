<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

      <div class="space-y-12 bg-gray-800 px-4 py-4">
        <div class="border-b border-white/10 pb-12">
          <h2 class="text-base/7 font-semibold text-white">Create new job</h2>
          <p class="mt-1 text-sm/6 text-gray-400">Just type in your personal information.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <x-form-field>
                <x-form-label for="title">Title</x-form-label>
                <div class="mt-2">
                
                    <x-form-input id="title" name="title" autocomplete="title" placeholder="leader"/>

                    <div>
                        <x-form-error name="title"/>
                    </div>
                </div>

            </x-form-field>

            <x-form-field>
                <x-form-label for="salary">Salary</x-form-label>
                <div class="mt-2">
                
                    <x-form-input id="salary" name="salary" autocomplete="salary" placeholder="10,000 per year"/>

                    <div>
                        <x-form-error name="salary"/>
                    </div>
                </div>

            </x-form-field>

            </div>
        </div>

      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/jobs" type="button" class="text-sm/6 font-semibold text-black">Cancel</a>
        <x-form-button type="submit">Save</x-form-button>
      </div>
    </form>

    
</x-layout>