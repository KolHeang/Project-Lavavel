@extends('master')
@section('content')
    <div class="flex flex-col w-full h-full">
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <form action="{{ route('supplier.store') }}"  method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block font-medium text-gray-900 text-md">Supplier Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 @error('name') outline-red-600 @else outline-gray-300 @enderror">
                            @error('name')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="email" class="block font-medium text-gray-900 text-md">Email</label>
                        <div class="mt-2">
                            <input type="email" value="{{ old('email') }}" name="email" id="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 @error('email') outline-red-600 @else outline-gray-300 @enderror">	
                            @error('email')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="phone" class="block font-medium text-gray-900 text-md">Phone Number</label>
                        <div class="mt-2">
                            <input type="tel" name="phone" value="{{ old('phone') }}" id="phone" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 @error('phone') outline-red-600 @else outline-gray-300 @enderror" placeholder="000 000 0000">
                            @error('phone')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="address" class="block font-medium text-gray-900 text-md">Address</label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address" value="{{old('address')}}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 @error('address') outline-red-600 @else outline-gray-300 @enderror">
                            @error('address')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="flex justify-end mt-4 gap-x-4">
                    <a href="{{ route('supplier.list') }}" class="flex items-center justify-center gap-2 px-3 py-2 text-white bg-red-500 rounded-md shadow-md cursor-pointer hover:bg-red-600 text-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                        </svg>
                        <span>Back</span>
                    </a>
                    <button type="submit" class="flex items-center justify-center gap-2 px-3 py-2 text-white bg-green-500 rounded-md shadow-md cursor-pointer hover:bg-green-600 text-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <span>Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection