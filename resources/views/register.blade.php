<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4 bg-slate-50">
        <div class="w-full max-w-md p-6 mx-auto bg-white rounded-md shadow-md">
            <div class="mb-4 text-center">
            <a href="javascript:void(0)"><img
                src="{{ asset('LogoBKH1.png') }}" alt="logo" class='inline-block w-40' />
            </a>
            </div>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <div>
                        <label class="block mb-2 text-sm text-gray-800">User Name</label>
                        <input name="name" id="name" type="text" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-blue-500" placeholder="Enter user name" required/>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-800">Email</label>
                        <input name="email" id="email" type="text" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-blue-500" placeholder="Enter email" required/>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-800">Password</label>
                        <input name="password" id="password" type="password" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-blue-500" placeholder="Enter password" required/>
                    </div>
                </div>

                <div class="!mt-12">
                    <button type="submit" class="w-full px-4 py-3 text-sm font-semibold tracking-wider text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none">
                    Create an account
                    </button>
                </div>
                <p class="mt-6 text-sm text-center text-gray-800">Already have an account? <a href="{{ route('getLogin') }}" class="ml-1 font-semibold text-blue-600 hover:underline">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>