@extends('master')
@section('content')
<div class="flex flex-col w-full h-full"> 
    <div class="p-2 overflow-x-auto bg-white shadow-md sm:rounded-lg">
        <div class="flex items-center justify-end mt-4 mb-4 mr-5">
            <a href="{{ route('createEmployee') }}" class="flex items-center justify-center w-20 p-1 font-sans text-lg text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-700">Create</a>
        </div>
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="text-gray-700 text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Employee Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BirthDate
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Salary
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($employees as $key => $data)
                            <tr class="text-sm bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    {{ $key + 1 }}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data->gender }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($data->dob)->format('m-d-Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->position }}
                                </td>
                                <td class="px-6 py-4">
                                    $ {{ $data->salary }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->address }}
                                </td>

                                <td class="flex gap-4 px-6 py-4">
                                    <a href="{{ route('editEmployee',['id' => $data->id])}}" class="font-medium">
                                        <svg class="w-6 h-6 text-blue-500 dark:text-white hover:text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('deleteEmployee', ['id' => $data->id]) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium">
                                            <svg class="w-6 h-6 text-red-500 hover:text-red-700 dark:text-white"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                                <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <div class="mt-4">
                    {{ $employees->links() }}
                </div>
            </div>
    </div>
@endsection