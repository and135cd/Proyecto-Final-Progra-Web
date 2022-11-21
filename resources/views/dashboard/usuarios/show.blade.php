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
                  <h2>Ver Usuario</h2>
                </div>
                <div class="card-body p-6">
                    <form action="{{route('usuarios.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" disabled value="{{$usuario->name}} ">
                            @error('name')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Correo</label>
                            <input type="text" name="email" class="form-control" disabled value="{{$usuario->email}} ">
                            @error('email')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Contraseña</label>
                            <input type="text" name="password" class="form-control" disabled value="{{$usuario->password}} ">
                            @error('password')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Tipo de usuario</label>
                            <select disabled name="tipo" id="tipo" class="form-control">
                                <option disabled value="">Seleccione un tipo de usuario</option>
                                @if ($usuario->tipo=1)
                                    <option selected value="1" id="1">Administrador</option>
                                    <option value="2" id="2">Gerente</option>
                                    <option value="3" id="3">Cliente</option>
                                @elseif($usuario->tipo=2)
                                    <option  value="1" id="1">Administrador</option>
                                    <option selected value="2" id="2">Gerente</option>
                                    <option value="3" id="3">Cliente</option>
                                @else
                                    <option selected value="1" id="1">Administrador</option>
                                    <option value="2" id="2">Gerente</option>
                                    <option selected value="3" id="3">Cliente</option>
                                @endif
                                
                            </select>
                            
                            
                        </section>
                    </form>
                  <a href="{{route('usuarios.index')}}" class="btn btn-outline-info mt-3">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>