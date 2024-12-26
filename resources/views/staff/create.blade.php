@extends('master')
@section('content')
    <div class="flex flex-col w-full h-full">
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <form action="{{ route('storeEmployee') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block font-medium text-gray-900 text-md">Employee Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
            
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block font-medium text-gray-900 text-md">Gender</label>
                        <div class="grid grid-cols-1 mt-2">
                            <select id="gender" name="gender" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                                <option value="" disabled selected>--- Select ---</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <svg class="self-center col-start-1 row-start-1 mr-2 text-gray-500 pointer-events-none size-5 justify-self-end sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    
                    <div class="sm:col-span-3">
                        <label for="dob" class="block font-medium text-gray-900 text-md">birthdate</label>
                        <div class="mt-2">
                            <input type="date" name="dob" id="dob" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="email" class="block font-medium text-gray-900 text-md">Email</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="phone" class="block font-medium text-gray-900 text-md">Phone Number</label>
                        <div class="mt-2">
                            <input type="tel" name="phone" id="phone" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 " placeholder="000 000 0000"  required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="position" class="block font-medium text-gray-900 text-md">Position</label>
                        <div class="mt-2">
                            <input type="text" name="position" id="position" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="salary" class="block font-medium text-gray-900 text-md">Salary</label>
                        <div class="mt-2">
                            <input type="text" name="salary" id="salary" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="address" class="block font-medium text-gray-900 text-md">Address</label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                </div>
                <div class="flex justify-end mt-4 gap-x-4">
                    <a href="{{ route('listEmployee') }}" class="flex items-center justify-center  text-white bg-red-500 rounded-md shadow-md hover:bg-red-600 text-md gap-2 px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                          </svg>
                          Back
                    </a>
                    <button type="submit" class="flex items-center justify-center  text-white bg-green-500 rounded-md shadow-md hover:bg-green-600 text-md gap-2 px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        Save

                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection