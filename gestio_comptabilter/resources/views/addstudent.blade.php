<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">




                    <form method="POST" action="{{route('show')}}">
                        @method('post')
                        @csrf



                        <label for="mat" class="mb-2">Mat:</label>
                        <input type="text" id="mat" name="mat" required class="border-2 border-gray-300 rounded-md mb-2">

                        <label for="nom" class="mb-2">Nom:</label>
                        <input type="text" id="nom" name="nom" required class="border-2 border-gray-300 rounded-md mb-2">

                        <label for="post_nom" class="mb-2">Post-Nom:</label>
                        <input type="text" id="post_nom" name="post_nom" required class="border-2 border-gray-300 rounded-md mb-2">

                        <label for="prenom" class="mb-2">Prénom:</label>
                        <input type="text" id="prenom" name="prenom" required class="border-2 border-gray-300 rounded-md mb-2">

                        <label for="email" class="mb-2">Email:</label>
                        <input type="email" id="email" name="email" required class="border-2 border-gray-300 rounded-md mb-2">

                        <label for="mot_de_passe" class="mb-2">Mot de passe:</label>
                        <input type="password" id="mot_de_passe" name="mot_de_passe" required class="border-2 border-gray-300 rounded-md mb-2">


                        <input type="number" id="solde" name="solde" class="border-2 border-gray-300 rounded-md mb-2 hidden" value="950">

                        <label for="promotion_id" class="mb-2"> promotion:</label>
                        <select name="promotion_id" id="promotion_id" class="border-2 border-gray-300 rounded-md mb-2">
                          <option value="1">L1</option>
                          <option value="2">L2</option>
                          <option value="3">L3</option>
                          <option value="4">L4</option>
                        </select>

                        <input type="submit" value="Enregistrer" class="bg-blue-500 hover:bg-blue-700 text-blue font-bold py-2 px-4 rounded-md">





        </div>
    </div>
</x-app-layout>
