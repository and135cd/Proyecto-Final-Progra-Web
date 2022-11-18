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
        
        <center><h1 class="mb-5">Ingreso de Empleados</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('empleados.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->

                        

                        <div class="form-floating mb-3">
                            <input type="text" name="Nombres" class="form-control form-floating mb-3" placeholder="Nombres" >
                            <label for="text">Ingrese los nombres del empleado</label>
                            @error('Nombres')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Apellidos" class="form-control form-floating mb-3" placeholder="Apellidos" >
                            <label for="text">Ingrese los apellidos del empleado</label>
                            @error('Apellidos')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Telefono" class="form-control form-floating mb-3" placeholder="Telefono" >
                            <label for="text">Ingrese el teléfono del empleado</label>
                            @error('Telefono')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" >
                            <label for="text">Ingrese la dirección del empleado</label>
                            @error('Direccion')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Dpi" class="form-control form-floating mb-3" placeholder="Dpi" >
                            <label for="text">Ingrese el Dpi del empleado</label>
                            @error('Dpi')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div> 
                        
                        <div class="form-floating mb-3">
                            <input type="text" name="Usuario" class="form-control form-floating mb-3" placeholder="Usuario" >
                            <label for="text">Ingrese el usuario</label>
                            @error('Usuario')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div> 

                        <div class="form-floating mb-3">
                            <input type="text" name="Contraseña" class="form-control form-floating mb-3" placeholder="Contraseña" >
                            <label for="text">Ingrese la contraseña</label>
                            @error('Contraseña')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div> 
                        {{-- Tipo de usuario --}}
                        <div class="form-floating mb-3">
                            <select name="IdTipoUsuario" id="IdTipoUsuario" class="form-control">
                                <option value="" selected disabled>Seleccione el tipo de usuario</option>
                                @foreach ($tipoU as $tipo)
                                    <option value="{{$tipo->id}}" id="{{$tipo->id}}">{{$tipo->NombreTipo}}</option>
                                @endforeach
                            </select>


                            @error('IdTipoUsuario')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Sucursal --}}
                        <div class="form-floating mb-3">
                            <select name="IdSucursal" id="IdSucursal" class="form-control">
                                <option value="" selected disabled>Seleccione la sucursal</option>
                                @foreach ($sucursales as $sucursal)
                                    <option value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                                @endforeach
                            </select>


                            @error('IdSucursal')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        

                        
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('empleados.index')}}" class="btn btn-outline-primary btn-lg mt-3">Regresar</a>
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