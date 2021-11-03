<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 

  </head>
  <body>
    <div class="alert alert-success" href="{{ route('home')}}"><h3> Vidrieria Zady</h3></div>

    <div class="card mt-3">
      <div class="card-header d-inline-flex">
      <b>Vinil</b>
      <a href="{{ route('productos.create') }}" class="btn btn-primary ml-auto">
      <i class="fa fa-plus"></i>
      Agregar
      </a>
      <div>
        <a href="{{ route('productos.pdf') }}" class="btn btn-secondary ml-auto">            
        <i class="fas fa-file-pdf"></i> PDF
        </a>
    </div> 
      </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <table class="table table-striped">
                    <thead>
                        <th>Nombre</th>
                        <th>Texto</th>
                        <th>Precio</th>
                        <th>Clave</th>
                        <th>Expiracion</th>
                    </thead>
                  
                    <tbody>
                      @foreach($vinil as $key)
                      <tr>
                        <td>{{ $key->nombre}}</td>
                        <td>{{ $key->texto}}</td>
                        <td>{{ $key->precio}}</td>
                        <td>{{ $key->clave}}</td>
                        <td>{{ $key->expiracion}}</td>
                      </tr>
                      @endforeach
                         
                         </tbody>
                 
                      
                 </table>
        </div>
      </div>
    </div>

     </div>
   

  </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>