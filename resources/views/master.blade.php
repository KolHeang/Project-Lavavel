<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HeangERP</title>
    <link rel="icon" type="image" href="{{ asset('LogoBKH1.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <aside class="fixed top-0 left-0 z-40 w-64 h-screen shadow-md bg-slate-800">
            <div class="h-auto">
                <div class="flex items-center justify-center w-full h-20 text-lg text-white border-b-2">
                    <img src="{{ asset('LogoBKH2.png') }}" alt="" class="h-20 w-34">
                </div>
                <div class="flex w-full h-full p-4">
                    <ul class="w-full space-y-2 font-medium">
                        <li class="rounded-md hover:bg-slate-900">
                            <a href="/employee" class="flex items-center p-2 text-white rounded-lg group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Employee</span>
                            </a>
                        </li>
                        <li class="rounded-md hover:bg-slate-900">
                            <a href="{{ route('supplier.list') }}" class="flex items-center p-2 text-white rounded-lg group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Supplier</span>
                            </a>
                        </li>
                        <li class="rounded-md hover:bg-slate-900">
                            <a href="{{ route('user.list') }}" class="flex items-center p-2 text-white rounded-lg group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                            </a>
                        </li>
                        <li class="rounded-md hover:bg-slate-900">
                            <a href="{{ route('product.list') }}" class="flex items-center p-2 text-white rounded-lg group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <div class="h-screen bg-gray-100 sm:ml-64">
            <nav class="flex flex-col items-center justify-between w-full h-20 bg-white border-b border-gray-200">
                <div class="relative flex items-center justify-end w-full h-full gap-4 mr-10">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </div>
                    <div>
                        <button id="profile" data-dropdown-toggle="dropdownAvatar" class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer hover:bg-gray-200 dark:text-gray-700" type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="rounded-full size-8" src="{{ asset('image/IMG_7383 copy.jpg') }}" alt="user photo">
                        </button>
                    
                        <!-- Dropdown menu -->
                        <div id="dropdownmenu" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-50 dark:bg-gray-700 dark:divide-gray-600 right-4 top-16">
                            <div class="flex flex-col gap-2 px-4 py-2 text-sm text-gray-900 dark:text-white">
                                <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                                <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                            </div>
                            
                            <div class="py-2">
                                <a href="{{ route('getLogin') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log in</a>
                                <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Register</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>   
            </nav>

            <main class="flex w-full p-4">
                <div class="flex w-full h-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <!-- Scripts -->
    <script>
        // Dropdown functionality
        const userMenuButton = document.getElementById('profile');
        const userDropdown = document.getElementById('dropdownmenu');

        userMenuButton.addEventListener('click', () => {
            userDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    </script>
    <!-- Scripts -->
    @yield('scripts')
</body>
</html>