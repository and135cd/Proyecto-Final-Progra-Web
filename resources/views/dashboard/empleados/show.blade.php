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
                  <h2>Ver Empleado</h2>
                </div>
                <div class="card-body p-6">
                    <form action="{{route('empleados.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for="" class="form-label">Nombres</label>
                            <input type="text" name="Nombres" class="form-control" disabled value="{{$empleado->Nombres}} ">
                            @error('Nombres')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Apellidos</label>
                            <input type="text" name="Apellidos" class="form-control" disabled value="{{$empleado->Apellidos}} ">
                            @error('Apellidos')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Teléfono</label>
                            <input type="text" name="Telefono" class="form-control" disabled value="{{$empleado->Telefono}} ">
                            @error('Telefono')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Dirección</label>
                            <input type="text" name="Direccion" class="form-control" disabled value="{{$empleado->Direccion}} ">
                            @error('Direccion')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Dpi</label>
                            <input type="text" name="Dpi" class="form-control" disabled value="{{$empleado->Dpi}} ">
                            @error('Dpi')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Usuario</label>
                            <input type="text" name="Usuario" class="form-control" disabled value="{{$empleado->Usuario}} ">
                            @error('Usuario')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Contraseña</label>
                            <input type="text" name="Contraseña" class="form-control" disabled value="{{$empleado->Contraseña}} ">
                            @error('Contraseña')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Tipo de usuario</label>
                            <input type="text" name="IdTipoUsuario" class="form-control" disabled value="{{$empleado->TipoUsuario->NombreTipo}} ">
                            @error('IdTipoUsuario')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Sucursal</label>
                            <input type="text" name="IdDepartamento" class="form-control" disabled value="{{$empleado->Sucursal->Direccion}} ">
                            @error('IdDepartamento')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                            
                            
                        </section>
                    </form>
                  <a href="{{route('empleados.index')}}" class="btn btn-outline-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>