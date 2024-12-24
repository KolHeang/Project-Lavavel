<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="font-[sans-serif] bg-gray-600">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
                <a href="javascript:void(0)"><img
                    src="{{ asset('LogoBKH1.png') }}" alt="logo" class='block w-40 mx-auto mb-8' />
                </a>
                <h2 class="font-bold text-center text-gray-800 text-md">Login</h2>
                <form class="mt-8 space-y-4" action="{{ route('postLogin') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="mb-2 text-sm text-gray-800">Email</label>
                        <div class="relative flex items-center">
                        <input name="email" id="email" type="text" required class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-blue-600" placeholder="Enter email" required/>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="absolute w-4 h-4 right-4" viewBox="0 0 24 24">
                            <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                            <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                        </svg>
                        </div>
                    </div>

                    <div>
                        <label for="passord" class="mb-2 text-sm text-gray-800">Password</label>
                        <div class="relative flex items-center">
                        <input name="password" id="password" type="password" required class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-blue-600" placeholder="Enter password" required/>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="absolute w-4 h-4 cursor-pointer right-4" viewBox="0 0 128 128">
                            <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                        </svg>
                        </div>
                    </div>

                    <div class="!mt-8">
                        <button type="submit" class="w-full px-4 py-3 text-sm tracking-wide text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none">
                        Login
                        </button>
                    </div>
                    <p class="text-gray-800 text-sm !mt-8 text-center">Don't have an account? <a href="{{ route('register') }}" class="ml-1 font-semibold text-blue-600 hover:underline whitespace-nowrap">Register here</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>