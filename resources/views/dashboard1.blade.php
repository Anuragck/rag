<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Unique Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">No of Peoples</th>
                                <th scope="col">No of Rooms</th>
                                <th scope="col">No of Bed</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lead as $item)


                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->unique_number }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phn }}</td>
                                <td>{{ $item->peoples }}</td>
                                <td>{{ $item->rooms }}</td>
                                <td>{{ $item->bed }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
