@include('user/head')
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('user/user_sidebar')


        <div class="flex flex-col flex-1 w-full">
            @include('user/header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Expenditures
                    </h2>


                    {{-- .................... --}}

                    
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">

                                        <th class="px-4 py-3">Item</th>
                                        <th class="px-4 py-3">Group</th>
                                        <th class="px-4 py-3">Date</th>
                                        <th class="px-4 py-3">Expense</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    @foreach($items as $fi)
                                    <tr class="text-gray-700 dark:text-gray-400">

                                        <td class="px-4 py-3 text-sm">
                                            {{$fi->item_name}}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{$fi->group_name}}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{$fi->updated_at}}
                                        </td>
                                        <td class="px-4 py-3">
                                            {{$fi->expense}}
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                {{-- ..................... --}}
        </div>
        </main>
    </div>
    </div>
</body>

</html>
