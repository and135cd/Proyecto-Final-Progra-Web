<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Ver</title>
</head>
<body>
    <header>@include('dashboard.partials.nav-header-admin')</header>
    <br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h2>Productos</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('productos.store')}}" method="post">

                        @csrf
            
                        <section class="margen">
                            <label for=""class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" disabled value="{{$producto->name}}">
                            @error('name')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Codigo</label>
                            <input type="text" name="slug" class="form-control" disabled value="{{$producto->slug}}">
                            @error('slug')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Detalles</label>
                            <input type="text" name="details" class="form-control" disabled value="{{$producto->details}}">
                            @error('details')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Precio</label>
                            <input type="number" step="0.25" name="price" class="form-control" disabled value="{{$producto->price}}">
                            @error('price')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Envio</label>
                            <input type="number" step="0.25" name="shipping_cost" class="form-control" disabled value="{{$producto->shipping_cost}}">
                            @error('shipping_cost')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Descripcion</label>
                            <input type="text" name="description" class="form-control" disabled value="{{$producto->description}}">
                            @error('description')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Imagen</label><br>
                            <img src="{{asset($producto->image_path)}}" width="40%" height="25%" class="img img-responsive">
                            <br>

                            <label for=""class="form-label">Marca</label>
                            <input type="text" name="brand_id" class="form-control" disabled value="{{$producto->Marca->NombreMarca}}">
                            @error('brand_id')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label">Sucursal</label>
                            <input type="text" name="category_id" class="form-control" disabled value="{{$producto->Sucursales->Direccion}}">
                            @error('category_id')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                        </section>
                    </form>
                  <a href="{{route('productos.index')}}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>