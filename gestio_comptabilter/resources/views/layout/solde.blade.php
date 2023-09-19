<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page html</title>
</head>
<body>



    @if ($frais_payes)
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Bienvenue sur votre compte {{$student->nom}} {{$student->post_nom}} {{$student->prenom}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Votre solde actuel est de {{ $solde }}.</p>
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

                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">{{ $frais->type }}</th>
                                        <th scope="col">- Montant payé :</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $frais->montant }}</td>

                                      </tr>

                                      <tr>

                                      </tr>
                                    </tbody>
                                  </table>

                                 
                                  </table>
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


</body>
</html>
