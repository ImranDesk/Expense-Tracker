@include('user/head')
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('user/user_sidebar')


        <div class="flex flex-col flex-1 w-full">
            @include('user/header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Select Group
                    </h2>


                    {{-- .................... --}}

                    
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->
                        @foreach($fetch_groups as $fg)


                        {{-- <a href="Add-Expenditures/{{$fg->group_name}}"> --}}
                        <a href="{{ route('View-Expenditures', $fg->group_name) }}">
                            <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div>
                                    <p class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400">
                                        {{$fg->group_name}}
                                    </p>

                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>


                    {{-- ..................... --}}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
