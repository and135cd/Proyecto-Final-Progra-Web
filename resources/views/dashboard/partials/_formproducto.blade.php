<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
</head>
<body>
    
    <form action="{{route('productos.update',$producto->id)}}" method="post" enctype="multipart/form-data"> 
        @method('PUT')
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="NombreProducto" class="form-control form-floating mb-3" placeholder="NombreProducto" value="{{$producto->NombreProducto}}">
                    <label for="text">Nombre</label>
                    @error('NombreProducto')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Descripcion" class="form-control form-floating mb-3" placeholder="Descripcion" value="{{$producto->Descripcion}}">
                    <label for="text">Descripcion</label>
                    @error('Descripcion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" step="0.25" name="Precio" class="form-control form-floating mb-3" placeholder="Precio" value="{{$producto->Precio}}">
                    <label for="text">Precio</label>
                    @error('Precio')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Codigo" class="form-control form-floating mb-3" placeholder="Codigo" value="{{$producto->Codigo}}">
                    <label for="text">Codigo</label>
                    @error('Codigo')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Imagen</strong>
                    <input class="form-control mb-3" id="Imagen"  name="Imagen" type="file" placeholder="image">
                    <img src="{{asset($producto->Imagen)}}" width="300px">
                </div>
                
                <div class="form-floating mb-3">
                    <select name="IdMarca" id="IdMarca" class="form-control">
                        <option value="" disabled>Marca</option>
                        @foreach ($marcas as $marca)
                            @if($producto->IdMarca==$marca->id)
                                <option selected value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NombreMarca}}</option>
                            @else
                                <option value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NombreMarca}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                
                
                <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                    <a href="{{route('productos.index')}}" class="btn btn-info mt-3">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>