<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Modifier un Etudiant</h1>
                <hr>


                    <ul>
                        <!-- Boucle io otrn am java hoe for (int i = 0; i<5; i++) et -->
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                
                <form class="form-group" action="/modifierEtudiant" method="POST">

                    <!--Rehefa tina ho enregistrer ny donnée izay ni-inserena dia tsy maintsy asina an'io "csrf" io -->
                    @csrf

                    <input type="hidden" name="id"  value="{{$mipanatra->id}}">
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" id="Nom" name="anarana" value="{{$mipanatra->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="fanapiny" value="{{$mipanatra->prenom}}">
                    </div>
                    <div class="form-group">
                        <label for="Classe">Classe</label>
                        <input type="text" class="form-control" id="Classe" name="classy" value="{{$mipanatra->classe}}">
                    </div><div class="form-group">
                        <label for="Prenom">Date de Naissance</label>
                        <input type="date" class="form-control" id="Prenom" name="daty" value="{{$mipanatra->daty}}">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prix</label>
                        <input type="number" step="any" class="form-control" id="Prenom" name="price" value="{{$mipanatra->prix}}">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Modifer</button>
                    <br>
                    <br>
                    <a href="/page_etudiant_liste"> Liste des Etudiants</a>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>