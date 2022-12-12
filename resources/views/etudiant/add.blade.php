<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../publics/css/image.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  
  <div class="card-body">
            <form action="{{route('Etudiant.store')}}" method="post">
                @csrf
                 <div class="input-group input-group-outline my-3">
                  <label class="form-label">nom</label>
                  <input type="text" class="form-control" name="nom">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">prenom</label>
                  <input type="text" class="form-control" name="prenom">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">naissance</label>
                  <input type="date" class="form-control" name="naissance">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">lieu</label>
                  <input type="text" class="form-control" name="lieu">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">sexe</label>
                  <input type="text" class="form-control" name="sexe">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">diplome</label>
                  <input type="text" class="form-control" name="diplome">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">nomtuteur</label>
                  <input type="text" class="form-control" name="nomtuteur">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">code classe</label>
                  <select class="form-control" name="filiere_id">
                    @foreach($Classe as $classe)
                    <option value="{{$filiere->id}}">{{$classe->nomcl}}</option>
                    @endforeach
                    </select>
                </div>
                
              
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" name="enregistrer">Enregistrer </button>
                </div>

       
      </div>

    </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>