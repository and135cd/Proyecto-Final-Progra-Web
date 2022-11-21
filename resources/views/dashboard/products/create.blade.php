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
                            <input type="text" name="name" class="form-control form-floating mb-3" placeholder="name" >
                            <label for="text">Ingrese el nombre del producto</label>
                            @error('name')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="slug" class="form-control form-floating mb-3" placeholder="slug" >
                            <label for="text">Slug</label>
                            @error('slug')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="details" class="form-control form-floating mb-3" placeholder="details" >
                            <label for="text">Detalles</label>
                            @error('details')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" step="0.25" name="price" class="form-control form-floating mb-3" placeholder="price" >
                            <label for="text">Precio</label>
                            @error('price')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" step="0.25" name="shipping_cost" class="form-control form-floating mb-3" placeholder="shipping_cost" >
                            <label for="text">Envio</label>
                            @error('shipping_cost')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="description" class="form-control form-floating mb-3" placeholder="description" >
                            <label for="text">Descripcion</label>
                            @error('description')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        {{-- Tipo de usuario --}}
                        <div class="form-floating mb-3">
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" selected disabled>Seleccione una marca</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}" id="{{$marca->id}}">{{$marca->NombreMarca}}</option>
                                @endforeach
                            </select>


                            @error('brand_id')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="sucursal_id" id="sucursal_id" class="form-control">
                                <option value="" selected disabled>Seleccione una sucursal</option>
                                @foreach ($sucursals as $sucursal)
                                    <option value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                                @endforeach
                            </select>


                            @error('sucursal_id')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                     

                        
                       

                        <div class="my-2">
                            <label >Imagen</label>
                            <input class="form-control mb-3" name="image_path" id="Imagen" type="file">
                            @error('image_path')
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