<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Tienda Online</title>
</head>
<body>
   

    <header>
        @include('dashboard.partials.nav-header-admin')
        <br>
        
        <center><h1 class="mb-5">Ingreso de Productos</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('productos.store')}}" method="post" enctype="multipart/form-data"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->

                        

                        <div class="form-floating mb-3">
                            <input type="text" name="NombreProducto" class="form-control form-floating mb-3" placeholder="NombreProducto" >
                            <label for="text">Ingrese el nombre del producto</label>
                            @error('NombreProducto')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" step="0.25" name="Precio" class="form-control form-floating mb-3" placeholder="Precio" >
                            <label for="text">Precio</label>
                            @error('Precio')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Descripcion" class="form-control form-floating mb-3" placeholder="Descripcion" >
                            <label for="text">Descripcion</label>
                            @error('Descripcion')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        

                        <div class="form-floating mb-3">
                            <input type="text" name="Codigo" class="form-control form-floating mb-3" placeholder="Codigo" >
                            <label for="text">Código</label>
                            @error('Codigo')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div> 
                        
                        
                        {{-- Tipo de usuario --}}
                        <div class="form-floating mb-3">
                            <select name="IdMarca" id="IdMarca" class="form-control">
                                <option value="" selected disabled>Seleccione una marca</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NombreMarca}}</option>
                                @endforeach
                            </select>


                            @error('IdMarca')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="IdSucursal" id="IdSucursal" class="form-control">
                                <option value="" selected disabled>Seleccione una sucursal</option>
                                @foreach ($sucursals as $sucursal)
                                    <option value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                                @endforeach
                            </select>


                            @error('IdSucursal')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" step="0.25" name="Stock" class="form-control form-floating mb-3" placeholder="Stock" >
                            <label for="text">Stock</label>
                            @error('Stock')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        <div class="form-floating mb-3">
                            <select name="Estado" id="Estado" class="form-control">
                                <option value="" selected disabled>Seleccione un estado</option>
                                <option value="1">Borrador</option>
                                <option value="2">Publicado</option>
                            </select>


                            @error('Estado')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="my-2">
                            <label >Imagen</label>
                            <input class="form-control mb-3" name="Imagen" id="Imagen" type="file">
                            @error('Imagen')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                       

                        

                        
                        <center>
                            <button type="submit" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('productos.index')}}" class="btn btn-outline-primary btn-lg mt-3">Regresar</a>
                        </center>
        
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                
                </section>
        
                                            
            </form>

        </div>
        
    </main>

    <footer>

    </footer>
    
</body>
</html>