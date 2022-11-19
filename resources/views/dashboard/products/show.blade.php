<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Tienda Online</title>
</head>
<body>
    <header>@include('dashboard.partials.nav-header-admin')</header>
    

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                  <h2>Ver Producto</h2>
                </div>
                <div class="card-body p-6">
                    <form action="{{route('productos.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for="" class="form-label">NombreProducto</label>
                            <input type="text" name="NombreProducto" class="form-control" disabled value="{{$producto->NombreProducto}} ">
                            @error('NombreProducto')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Precio</label>
                            <input type="text" name="Precio" class="form-control" disabled value="{{$producto->Precio}} ">
                            @error('Precio')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Descripcion</label>
                            <input type="text" name="Descripcion" class="form-control" disabled value="{{$producto->Descripcion}} ">
                            @error('Descripcion')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Estado</label>
                            @if ($producto->Estado==1)
                            <input type="text" name="Estado" class="form-control" disabled value="Borrador ">
                            @else
                            <input type="text" name="Estado" class="form-control" disabled value="Publicado ">
                            @endif
                            
                            @error('Estado')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Codigo</label>
                            <input type="text" name="Codigo" class="form-control" disabled value="{{$producto->Codigo}} ">
                            @error('Codigo')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Imagen</label><br>
                            <img src="{{asset($producto->Imagen)}} " class="mb-3" width="32%" height="20%" alt="">
                            
                            
                        </section>
                    </form>
                  <a href="{{route('productos.index')}}" class="btn btn-outline-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>