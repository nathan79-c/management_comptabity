<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($frais_payes)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">voici le compte de l'etudiant {{$student->nom}} {{$student->post_nom}} {{$student->prenom}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">Le solde actuel est de {{ $solde }}.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Historique des frais payés :</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group">
                                @foreach ($frais_payes as $frais)
                                    <li class="list-group-item list-group-item-{{ $frais->type }}">
                                        {{ $frais->type }} - Montant payé : {{ $frais->montant }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @else
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">Informations de connexion incorrectes</h1>
                        </div>
                    </div>
                </div>
            @endif




            </div>
        </div>
    </div>
</x-app-layout>
