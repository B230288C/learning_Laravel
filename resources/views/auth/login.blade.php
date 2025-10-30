<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

      <div class="space-y-12 bg-gray-800 px-4 py-4">
        <div class="border-b border-white/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                
                    <x-form-input id="email" name="email" type="email" :value="old('email')" required />

                    <div>
                        <x-form-error name="email" />
                    </div>
                </div>

            </x-form-field>

            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                
                    <x-form-input id="password" name="password" type="password" required />

                    <div>
                        <x-form-error name="password" />
                    </div>
                </div>

            </x-form-field>

            </div>
        </div>

      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" class="text-sm/6 font-semibold text-black">Cancel</a>
        <x-form-button>Log In</x-form-button>
      </div>
    </form>

    
</x-layout>