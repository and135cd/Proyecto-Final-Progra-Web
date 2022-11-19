<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />

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


            {{-- <form action="{{route('productos.store')}}" method="post" enctype="multipart/form-data"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->

                        
                        
                        <div class="form-floating mb-3">
                            <select name="Estado" id="Estado" class="form-control">
                                <option value="" selected disabled>Seleccione el estado</option>
                                <option value="1">Borrador</option>
                                <option value="2">Publicado</option>
                            </select>


                            @error('IdMarca')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="NombreProducto" class="form-control form-floating mb-3" placeholder="NombreProducto" >
                            <label for="text">Ingrese el nombre</label>
                            @error('NombreProducto')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" step="0.25" name="Precio" class="form-control form-floating mb-3" placeholder="Precio" >
                            <label for="text">Ingrese el precio del producto</label>
                            @error('Precio')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        <div class="form-floating mb-3">
                            <select name="IdMarca" id="IdMarca" class="form-control">
                                <option value="" selected disabled>Seleccione la marca</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NombreMarca}}</option>
                                @endforeach
                            </select>


                            @error('IdMarca')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        

                        <div class="form-floating mb-3">
                            <input type="text" name="Codigo" class="form-control form-floating mb-3" placeholder="Codigo" >
                            <label for="text">Ingrese el código del producto</label>
                            @error('Codigo')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Descripcion" class="form-control form-floating mb-3" placeholder="Descripcion" >
                            <label for="text">Ingrese la descripción</label>
                            @error('Descripcion')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div> 
                        
                        

                        <div class="my-2">
                            <input type="file" name="Imagen" id="Imagen" accept="image/*" class="form-control @error('Imagen') is-invalid @enderror">
                            @error('Imagen')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('productos.index')}}" class="btn btn-outline-primary btn-lg mt-3">Regresar</a>
                        </center>
        
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                
                </section>
        
                                            
            </form> --}}

            <form action="{{route('productos.store')}}" method="post" enctype="multipart/form-data">
                @include('dashboard.partials.sesion-flash-status')

                <div class="form-floating mb-3">
                    <input type="text" name="NombreProducto" class="form-control form-floating mb-3" placeholder="NombreProducto" >
                    <label for="text">Ingrese el nombre</label>
                    @error('NombreProducto')
                        <small class="text-danger ">{{ $message }}</small>
                    @enderror
                </div>

               <div class="form-floating mb-3">
                        <input type="number" step="0.25" name="Precio" class="form-control form-floating mb-3" placeholder="Precio" >
                        <label for="text">Ingrese el precio del producto</label>
                        @error('Precio')
                            <small class="text-danger ">{{ $message }}</small>
                        @enderror
                </div>

                
                <div class="form-floating mb-3">
                    <select name="Estado" id="Estado" class="form-control">
                        <option value="" selected disabled>Seleccione el estado</option>
                        <option value="1">Borrador</option>
                        <option value="2">Publicado</option>
                    </select>


                    @error('Estado')
                        <small class="text-danger ">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <select name="IdMarca" id="IdMarca" class="form-control">
                        <option value="" selected disabled>Seleccione la marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NombreMarca}}</option>
                        @endforeach
                    </select>


                    @error('IdMarca')
                        <small class="text-danger ">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="Codigo" class="form-control form-floating mb-3" placeholder="Codigo" >
                    <label for="text">Ingrese el código del producto</label>
                    @error('Codigo')
                        <small class="text-danger ">{{ $message }}</small>
                    @enderror
                </div>
               
                <div class="form-floating mb-3">
                    <input type="text" name="Descripcion" class="form-control form-floating mb-3" placeholder="Descripcion" >
                    <label for="text">Ingrese la descripción</label>
                    @error('Descripcion')
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
            </form>

        </div>
        
    </main>

    <footer>

    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
</body>
</html>