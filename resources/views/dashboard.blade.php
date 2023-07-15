@include('head')
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('sidebar')

    
        <div class="flex flex-col flex-1 w-full">
            @include('header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    
                

                {{-- .................... --}}


                <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                   Welcome To Admin Dashboard
                </h1>


                {{-- ..................... --}}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
