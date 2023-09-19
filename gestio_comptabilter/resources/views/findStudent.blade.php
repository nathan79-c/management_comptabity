<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="w-full">
                    <div class="flex justify-between items-center">
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Rechercher...">
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option value="all">Toutes les catégories</option>
                            <option value="licence1">Licence 1</option>
                            <option value="licence2">Licence 2</option>
                            <option value="licence3">Licence 3</option>
                            <option value="licence4">Licence 4</option>
                        </select>
                    </div>
                    <button type="submit" class="ml-auto px-4 py-2 bg-blue-500 text-black text-xl rounded-md border-radius-5">Rechercher</button>
                </form>




            </div>
        </div>
    </div>
</x-app-layout>

