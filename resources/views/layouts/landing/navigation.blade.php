<nav class="border-primary bg-primary dark:bg-gray-900">
    <div class="mx-auto flex max-w-[90rem] flex-wrap items-center justify-between p-4">
        <a class="flex items-center space-x-3 rtl:space-x-reverse" href="https://flowbite.com/">
            <span class="self-center whitespace-nowrap text-2xl font-semibold text-white dark:text-white">Assesment
                Abk</span>
        </a>
        <button
            class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
            data-collapse-toggle="navbar-default" type="button" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <a class="rounded-lg bg-secondary px-9 py-2.5 text-sm font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-4 focus:ring-orange-600 dark:bg-secondary dark:hover:bg-orange-700 dark:focus:ring-orange-600"
                href="{{ route('login') }}">Login</a>
        </div>
    </div>
</nav>
