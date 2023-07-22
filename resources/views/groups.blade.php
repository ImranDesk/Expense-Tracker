@include('head')
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('sidebar')


        <div class="flex flex-col flex-1 w-full">
            @include('header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        View Groups
                    </h2>


                    {{-- .................... --}}


                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->
                        @foreach($fetch_groups as $fg)
                        <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div>
                                <p class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400">
                                    {{$fg->name}}
                                </p>

                            </div>
                        </div>
                        @endforeach

                    </div>
                    <a href="Create-Groups">
                        <div class="mt-4 text-sm">
                            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Add Group
                            </button>
                        </div>
                    </a>

                    {{-- ..................... --}}
                </div>
            </main>
        </div>
    </div>

   
</body>
</html>
