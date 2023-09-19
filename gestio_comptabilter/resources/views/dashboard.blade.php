<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>

        <form action="{{ route('store') }}" method="post" class="flex flex-col w-full max-w-sm">
            @csrf

            <label for="montant" class="mb-2">Montant:</label>
            <input type="number" id="montant" name="montant" required class="border-2 border-gray-300 rounded-md mb-2">

            <label for="type" class="mb-2">Type:</label>
            <input type="text" id="type" name="type" required class="border-2 border-gray-300 rounded-md mb-2">

            <label for="etudiant_id" class="mb-2"> Matricule étudiant:</label>
            <input type="text" id="type" name="type" required class="border-2 border-gray-300 rounded-md mb-2">

            <button type="submit" class="ml-auto px-4 py-2 bg-blue-500 text-black text-xl rounded-md border-radius-5">confirmer</button>
          </form>
    </x-slot>



</x-app-layout>
