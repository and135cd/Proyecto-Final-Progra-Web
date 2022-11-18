<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Empleado</title>
</head>
<body>
    
    <form action="{{route('empleados.store')}}" method="post"> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="Nombres" class="form-control form-floating mb-3" placeholder="Nombres" value="{{$empleado->Nombres}}">
                    <label for="text">Nombres</label>
                    @error('Nombres')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Apellidos" class="form-control form-floating mb-3" placeholder="Apellidos" value="{{$empleado->Apellidos}}">
                    <label for="text">Apellidos</label>
                    @error('Apellidos')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Telefono" class="form-control form-floating mb-3" placeholder="Telefono" value="{{$empleado->Telefono}}">
                    <label for="text">Teléfono</label>
                    @error('Telefono')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" value="{{$empleado->Direccion}}">
                    <label for="text">Dirección</label>
                    @error('Direccion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Dpi" class="form-control form-floating mb-3" placeholder="Dpi" value="{{$empleado->Dpi}}">
                    <label for="text">Dpi</label>
                    @error('Dpi')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Usuario" class="form-control form-floating mb-3" placeholder="Usuario" value="{{$empleado->Usuario}}">
                    <label for="text">Usuario</label>
                    @error('Usuario')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Contraseña" class="form-control form-floating mb-3" placeholder="Contraseña" value="{{$empleado->Contraseña}}">
                    <label for="text">Contraseña</label>
                    @error('Contraseña')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>


                <label for="text" class="mb-1">Tipo de Usuario</label>
                

                <div class="form-floating mb-3">
                    <select name="IdTipoUsuario" value="IdTipoUsuario" id="IdTipoUsuario" class="form-control">
                        <option value="" selected disabled>Seleccione el tipo de usuario</option>
                        
                        @foreach ($tipos as $tipo)

                            @if ($empleado->IdTipoUsuario == $tipo->id)
                                <option selected value="{{$tipo->id}}" id="{{$tipo->id}}">{{$tipo->NombreTipo}}</option>
                            @else
                                <option value="{{$tipo->id}}" id="{{$tipo->id}}">{{$tipo->NombreTipo}}</option>
                            @endif
                            
                        @endforeach
                    </select>


                    @error('IdTipoUsuario')
                        <small class="text-danger ">{{ $message }}</small>
                    @enderror
                </div>
                
                <label for="text" class="mb-1">Sucursal</label>
                <div class="form-floating mb-3">
                    
                    
                    <select name="IdSucursal" id="IdSucursal" class="form-control">
                        <option value="" disabled>Seleccione una sucursal</option>
                        @foreach ($sucursales as $sucursal)
                            @if($empleado->IdSucursal ==$sucursal->id)
                                <option selected value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                            @else
                                <option value="{{$sucursal->id}}" id="{{$sucursal->id}}">{{$sucursal->Direccion}}</option>
                            @endif

                        @endforeach
                    </select>


                    @error('IdSucursal')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                

                <center>
                    <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar cambios</h4></button> <br>
                    <a href="{{route('empleados.index')}}" class="btn btn-outline-info mt-3 btn-lg"><h4>Regresar</h4></a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>