<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/ajoutEtudiant" method="POST">
        @csrf
        <input type="text" placeholder="nom" name="anarana">
        <input type="text" placeholder="prenom" name="fanapiny">
        <input type="date" placeholder="dtn" name="daty">
        <input type="number" step="any" placeholder="prix" name="price">
        <button type="submit">Ok</button>
    </form>
</body>
</html> -->






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
                <h1>Ajouter des Etudiants</h1>
                <hr>

                @if (session('vita'))
                    <div class="alert alert-success">
                        {{session('vita')}}
                    </div>
                @endif


                    <ul>
                        <!-- Boucle io otrn am java hoe for (int i = 0; i<5; i++) et -->
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                
                <form class="form-group" action="/ajoutEtudiant" method="POST">

                    <!--Rehefa tina ho enregistrer ny donnée izay ni-inserena dia tsy maintsy asina an'io "csrf" io -->
                    @csrf

                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" id="Nom" name="anarana">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="fanapiny">
                    </div>
                    <div class="form-group">
                        <label for="Classe">Classe</label>
                        <input type="text" class="form-control" id="Classe" name="classy">
                    </div><div class="form-group">
                        <label for="Prenom">Date de Naissance</label>
                        <input type="date" class="form-control" id="Prenom" name="daty">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prix</label>
                        <input type="number" step="any" class="form-control" id="Prenom" name="price">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
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