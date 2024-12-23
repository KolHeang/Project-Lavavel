@extends('master')
@section('content')
    <div class="flex flex-col w-full h-full">
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <form action="{{ route('updateEmployee') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $employee->id }}">
                <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block font-medium text-gray-900 text-md">Employee Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" value="{{ $employee->name }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
            
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block font-medium text-gray-900 text-md">Gender</label>
                        <div class="grid grid-cols-1 mt-2">
                            <select id="gender" name="gender" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                                <option value="" disabled {{ !$employee->gender ? 'selected' : '' }}>--- Select ---</option>
                                <option value="Male" {{$employee->gender =='Male'? 'selected':''  }}>Male</option>
                                <option value="Female" {{$employee->gender =='Female'? 'selected':''  }}>Female</option>
                            </select>
                            <svg class="self-center col-start-1 row-start-1 mr-2 text-gray-500 pointer-events-none size-5 justify-self-end sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    
                    <div class="sm:col-span-3">
                        <label for="dob" class="block font-medium text-gray-900 text-md">birthdate</label>
                        <div class="mt-2">
                            <input type="date" name="dob" id="dob" value="{{ $employee->dob }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block font-medium text-gray-900 text-md">Email</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" value="{{ $employee->email }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="phone" class="block font-medium text-gray-900 text-md">Phone Number</label>
                        <div class="mt-2">
                            <input type="tel" name="phone" id="phone" value="{{ $employee->phone }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 " placeholder="000 000 0000"  required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="position" class="block font-medium text-gray-900 text-md">Position</label>
                        <div class="mt-2">
                            <input type="text" name="position" id="position" value="{{ $employee->position }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="salary" class="block font-medium text-gray-900 text-md">Salary</label>
                        <div class="mt-2">
                            <input type="text" name="salary" id="salary" value="{{ $employee->salary }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="address" class="block font-medium text-gray-900 text-md">Address</label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address" value="{{ $employee->address }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                </div>
                <div class="flex justify-end mt-4 gap-x-4">
                    <a href="{{ route('listEmployee') }}" class="flex items-center justify-center w-20 p-1 bg-red-500 rounded-md shadow-md hover:bg-red-600 text-md">Back</a>
                    <button type="submit" class="flex items-center justify-center w-20 p-1 bg-green-500 rounded-md shadow-md hover:bg-green-600 text-md">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection