<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <title>Ajout d'une nouvelle tache</title>
</head>
<body>
    <h1 class="text-center">Ajout d'une nouvelle tache</h1>
    <!--
     <form action="{{route('store.task')}}" method="POST">
      @csrf
      <span >
        <label for="">COntenu :</label>
      <input type="text" placeholder="Le contenu de la tache" name="content" required>
    </span>
    <span>
        <label for="">Status :</label>
        <input type="checkbox"  name="completed" value="true">
    </span>
      <input type="submit" value="Ajouter une tache ">    
     </form>
    -->

<form action="{{route('store.task')}}" method="POST" class="container">
      @csrf
     <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="content" placeholder="contenu" required>
        <label for="floatingInput">titre</label>
      </div>
      <div class=" mb-3">
        
          <label for="">Status :</label>
          <input type="checkbox"  name="completed" value="true">
        </div >
      
       <button type="submit" class="btn btn-success"> Ajouter une nouvelle tache</button>
      </div>
</form>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>