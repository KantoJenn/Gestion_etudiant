<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Liste des Etudiants</h1>
                <hr>
                <a href="/page_ajout_etudiant" class="btn btn-primary">Add Etudiant</a>
                <hr>

                <form action="{{ route('recherche.be') }}" method="get">
                    <input type="text" name="rechercher" placeholder="Rechercher...">
                    <button type="submit">Rechercher</button>
                </form>
                
                @if (session('okey'))
                    <div class="alert alert-success">
                        {{session('okey')}}
                    </div>
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date</th>
                            <th>Prix</th>
                            <th>Classe</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- ito ny mampatongan'ny nulerero id mifanaraka tsara 
                        na dia misy vofafa aza-->
                        @php
                            $numeroID = 1
                        @endphp


                        @foreach ($etud as $bota)
                            <tr>
                                <td>{{$numeroID}}</td>
                                <td>{{$bota->nom}}</td>
                                <td>{{$bota->prenom}}</td>
                                <td>{{$bota->dtn}}</td>
                                <td>{{$bota->prix}}</td>
                                <td>{{$bota->classe}}</td>
                                <td>
                                    <a href="/page_modifer_etudiant/{{$bota->id}}" class="btn btn-success">Update</a>
                                    <a href="/page_supp_etudiant/{{$bota->id}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            @php
                                $numeroID += 1;
                            @endphp

                        @endforeach

                    </tbody>
                </table>

                <!--Dia eto ny anasina'le pagination-->
                    {{$etud->links()}}

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
<a href="/page_ajout_etudiant">Ajouter etudiant</a>
</html>