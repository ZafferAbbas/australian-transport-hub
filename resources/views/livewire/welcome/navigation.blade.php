<div class="flex sm:flex-row w-full h-20 mx-auto max-w-7xl justify-between items-center">
    <div class="brand-logo flex justify-start items-center">
        <img src="#" alt="Test">
    </div>
    <div class="flex sm:flex-row items-center">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                wire:navigate>Dashboard</a>
        @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                wire:navigate>Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    wire:navigate>Register</a>
            @endif
        @endauth
    </div>
</div>
