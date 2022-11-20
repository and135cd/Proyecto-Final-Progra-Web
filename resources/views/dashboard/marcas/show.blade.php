<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>SHOW</title>
</head>
<body>
    <header>@include('dashboard.partials.nav-header-admin')</header>
    

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                  <h2>Ver Marca</h2>
                </div>
                <div class="card-body p-6">
                    <form action="{{route('marcas.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="NombreMarca" class="form-control" disabled value="{{$marca->NombreMarca}} ">
                            @error('NombreMarca')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                            
                            
                        </section>

                        

                        <label for="" class="form-label">Categoría</label>
                        <section class="margen" >
                            <select disabled name="IdCategoria" id="IdCategoria" class="form-control">
                                <option selected disabled value="">Seleccione una categoría</option>
                                @foreach ($categorias as $categoria)
                                    @if ($marca->IdCategoria== $categoria->id)
                                        <option selected value="{{$categoria->id}}" id="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
                                    @else
                                        <option value="{{$categoria->id}}" id="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
                                    @endif
                                    
                                @endforeach
                            </select>
                            
                        </section>
                        <br>
                    </form>
                  <a href="{{route('marcas.index')}}" class="btn btn-outline-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>