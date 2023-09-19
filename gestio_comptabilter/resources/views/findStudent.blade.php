<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{route('studentFind')}}">
                    @method('post')
                    @csrf
                    <div class="flex justify-between items-center">
                        <input type="text" name="matricule" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Rechercher...">

                    </div>
                    <button type="submit" class="ml-auto px-4 py-2 bg-blue-500 text-black text-xl rounded-md border-radius-5">Rechercher</button>
                </form>




            </div>
        </div>
    </div>
</x-app-layout>

