@extends('master')
@section('content')
<div class="flex flex-col w-full h-full"> 
    <div class="p-2 overflow-x-auto bg-white shadow-md sm:rounded-lg">
        <!-- Flash Message -->
        @if (session('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif
        <div class="flex items-center justify-end mt-2 mb-4 mr-5">
            <div class="flex items-center justify-center gap-1 px-3 py-2 bg-blue-600 rounded-md hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <a href="{{ route('createEmployee') }}" class="font-sans font-medium text-white ">Create</a>
            </div>
        </div>
        
        <div class="inline-block min-w-full py-2 align-middle sm:px-4 lg:px-6">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Employee Name
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Gender
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            BirthDate
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Phone
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Email
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Position
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Salary
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Address
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Action
                        </th>
                    </tr>
                </thead>
                    <tbody class="bg-white">
                        @foreach ($employees as $key => $data)
                            <tr class="even:bg-gray-50">
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $key + 1 }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $data->name }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $data->gender }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($data->dob)->format('m-d-Y') }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $data->phone }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $data->email }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $data->position }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    $ {{ $data->salary }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-700 whitespace-nowrap">
                                    {{ $data->address }}
                                </td>
    
                                <td class="flex items-center gap-4 px-6 py-4">
                                    <a href="{{ route('editEmployee',['id' => $data->id])}}" class="font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                                        viewBox="0 0 348.882 348.882">
                                        <path
                                            d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                            data-original="#000000" />
                                        <path
                                            d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                            data-original="#000000" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('deleteEmployee', ['id' => $data->id]) }}" method="POST" class="flex items-center justify-center" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                    data-original="#000000" />
                                                <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                    data-original="#000000" />
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
</div>
@endsection