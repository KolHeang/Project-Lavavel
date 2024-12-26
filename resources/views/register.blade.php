<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image" href="{{ asset('LogoBKH1.png') }}">
    <title>HeangERP</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4 bg-cover bg-center relative bg-no-repeat" style="background-image: url('{{ asset('image/login.jpg') }}');">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
        <div class="relative w-full max-w-md p-6 mx-auto ">
            <div class="mb-4 text-center">
                <a href="javascript:void(0)"><img
                    src="{{ asset('LogoBKH2.png') }}" alt="logo" class='inline-block w-80' />
                </a>
            </div>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <div>
                        <label class="block mb-2 text-sm text-white">User Name</label>
                        <input name="name" id="name" type="text" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-blue-500" placeholder="Enter user name" required/>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-white">Email</label>
                        <input name="email" id="email" type="text" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-blue-500" placeholder="Enter email" required/>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-white">Password</label>
                        <input name="password" id="password" type="password" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-blue-500" placeholder="Enter password" required/>
                    </div>
                </div>

                <div class="!mt-12">
                    <button type="submit" class="w-full px-4 py-3 text-sm font-semibold tracking-wider text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none">
                    Create an account
                    </button>
                </div>
                <p class="mt-6 text-sm text-center text-white">Already have an account? <a href="{{ route('getLogin') }}" class="ml-1 font-semibold text-red-600 hover:underline">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>