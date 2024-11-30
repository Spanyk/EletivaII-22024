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
                    {{ __("You're logged in!") }}
                    {{__("Welcome to we Website")}}
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center mt-4 ">
        <h2 class="mx-4 p-2">Adicionar Plantio</h2>
        <div class="btn btn-success mx-2">
            <a href="/plantio/create" class="navbar-brand"><i class="fa-solid fa-plus"></i></a>
        </div>
    </div>
</x-app-layout>
