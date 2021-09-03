<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">ID:</th>
                                <td>{{ Auth::user()->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name:</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Sender id:</th>
                                <td>{{ $user[0]->sender_id}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
