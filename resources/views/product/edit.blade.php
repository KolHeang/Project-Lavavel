@extends('master')
@section('content')
    <div class="flex flex-col w-full h-full">
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <form action="{{ route('product.update') }}" enctype="multipart/form-data" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <input type="text" name="id" id="id" value="{{ $product->id }}" hidden>
                <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block font-medium text-gray-900 text-md">Product Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" value="{{ $product->name }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="description" class="block font-medium text-gray-900 text-md">Decription</label>
                        <div class="mt-2">
                            <input type="text" name="description" value="{{ $product->description }}" id="description" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="quantity" class="block font-medium text-gray-900 text-md">Quantity</label>
                        <div class="mt-2">
                            <input type="text" name="quantity" value="{{ $product->quantity }}" id="quantity" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="price" class="block font-medium text-gray-900 text-md">Price</label>
                        <div class="mt-2">
                            <input type="number" name="price" value="{{ $product->price }}" id="price" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 "  required>
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="image" class="block font-medium text-gray-900 text-md">Image</label>
                        <div class="mt-2">
                            <input type="file" name="image" id="image" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-800 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @if($product->image != null)
                            <img src="{{ asset('image/product/' . $product->image) }}" alt="Product Image" class="object-cover w-20 h-20 mt-2">
                            @endif
                        </div>
                    </div>

                </div>
                <div class="flex justify-end mt-4 gap-x-4">
                    <a href="{{ route('product.list') }}" class="flex items-center justify-center gap-2 px-3 py-2 text-white bg-red-500 rounded-md shadow-md hover:bg-red-600 text-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                        </svg>
                        Back
                    </a>
                    <button type="submit" class="flex items-center justify-center gap-2 px-3 py-2 text-white bg-green-500 rounded-md shadow-md hover:bg-green-600 text-md">
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