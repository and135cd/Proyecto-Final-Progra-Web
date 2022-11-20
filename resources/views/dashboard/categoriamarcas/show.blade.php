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
            {{$categoria}}

            <form action="{{route('categoriamarcas.store')}}" method="post" "> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->

                        

                        <div class="form-floating mb-3">
                            <input type="text" name="NombreCategoria" class="form-control form-floating mb-3" placeholder="NombreCategoria" value="{{$categoria->NombreCategoria}}">
                            <label for="text">Categoría</label>
                            @error('NombreCategoria')
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

                      

                      
                        

                        
                        <center>
                            <button type="submit" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('categoriamarcas.index')}}" class="btn btn-outline-primary btn-lg mt-3">Regresar</a>
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