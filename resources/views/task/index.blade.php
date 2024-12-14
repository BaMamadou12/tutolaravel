<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <title>liste des taches</title>
</head>
<body>
    <h1 class="text-center m-5">la liste des taches</h1>
   <!--   
    @foreach($tasks as $task) 
    <li>
       <p> Contenu :{{$task->content}}</p>
       <span > Status : @if($task->completed) terminé @else encours @endif </span>

           {{-- bouton pour la suppression --}}
        <form action="{{ route('destroy.task',$task->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary">Supprimer</button>

        </form>

        {{--Bouton qui permet de mettre a jour une tache dans la liste--}}

        <form action="{{route('page.update',$task->id)}}" method="post">
            @csrf
            <button type="button" class="btn btn-warning">Modifier</button>

        </form>
       <hr/>
    </li>
    @endforeach
    <div>
      <form action="{{route('create.page')}}" method="GET">
      @csrf
      <button>Ajouter une nouvelle tache </button>
    </form> 
    
    <div>
    -->
<div class="container mt-5 text-center">  
   
      
 <ul class="list-group ">
    @foreach($tasks as $task)
  <li class="list-group-item d-flex justify-content-between align-items-center row">
    <div class="col-5">
    {{$task->content}}
    </div>
    <span class="badge text-bg-primary rounded-pill col ">  @if($task->completed) Terminé @else Encours @endif </span>
    <div class="col">
        {{--BOuton qui permet de supprimer--}}
     <form action="{{ route('destroy.task',$task->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>

    </form>
  </div>
    {{--Bouton qui permet de mettre a jour une tache dans la liste--}}

  <div class="col">
    <form action="{{route('page.update',$task->id)}}" method="post">
        @csrf
        <button type="submit" class="btn btn-warning">Modifier</button>

    </form>
 </div>
  </li>
  @endforeach
</ul>
 


<div class="mt-5">
    <form action="{{route('create.page')}}" method="GET">
    @csrf
    <button type="submit" class="btn btn-success"> Ajouter une nouvelle tache</button>
  </form> 
  
 </div>      
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        
</body>

</html>