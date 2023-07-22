@include('head')
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('sidebar')


        <div class="flex flex-col flex-1 w-full">
            @include('header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Add Items
                    </h2>


                    {{-- .................... --}}
                    <form method="POST" action="add-item">
                        @csrf

                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                                Select Group
                            </span>
                            <select name="group" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                @foreach($fetch_groups as $fg)
                                <option value="{{$fg->name}}">{{$fg->name}}</option>
                                @endforeach
                            </select>
                        </label>
                        

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Item</span>
                            <input name="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Item Name Here" />
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Price</span>
                            <input name="price" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Price Here" />
                        </label>

                        <div class="mt-4 text-sm">
                            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Add
                            </button>
                        </div>
                    </form>

                    {{-- ..................... --}}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
