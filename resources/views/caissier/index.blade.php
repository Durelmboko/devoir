<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nomCaissier </th>
      <th scope="col">prenomCaissier </th>
      <th scope="col">niveau </th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Etudiant as $etudiant)
    <tr>
      <td>{{$caissier->nomCaissier}}</td>
      <td>{{$caissier->prenomCaissier}}</td>
      <td>{{$caissier->niveau}}</td>
      


      <td><a class="btn btn-primary" href="{{route('caissier.edit',$caissier->id)}}">Modifier caissier</a>
        </td>
        <td>
            <form action="{{route('caissier.destroy',$caissier->id)}}" method="post">
            @csrf 
            @method('DELETE')
<button class='btn btn-danger'>Delete</button>    </form>    </td>
      @endforeach
  </tbody>
</table>

<a class="btn btn-success" href="{{route('caissier.create')}}">Ajouter caissier</a>
</body>
</html>
