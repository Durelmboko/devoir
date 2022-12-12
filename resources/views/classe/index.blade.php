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
      <th scope="col">nomcl </th>
      <th scope="col">fraisInscription </th>
      <th scope="col">mensualite </th>
      <th scope="col">fraistenue </th>
      <th scope="col">fraisamicale </th>   
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($classe as $classe)
    <tr>
      <td>{{$classe->nomcl}}</td>
      <td>{{$classe->fraisInscription}}</td>
      <td>{{$classe->mensualite}}</td>
      <td>{{$classe->fraistenue}}</td>
      <td>{{$classe->fraisamicale}}</td>
      
      


      <td><a class="btn btn-primary" href="{{route('classe.edit',$classe->id)}}">Modifier classe</a>
        </td>
        <td>
            <form action="{{route('classe.destroy',$classe->id)}}" method="post">
            @csrf 
            @method('DELETE')
<button class='btn btn-danger'>Delete</button>    </form>    </td>
      @endforeach
  </tbody>
</table>

<a class="btn btn-success" href="{{route('classe.create')}}">Ajouter classe</a>
</body>
</html>
