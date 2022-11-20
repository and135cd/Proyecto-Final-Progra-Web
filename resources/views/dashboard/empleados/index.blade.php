<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Tienda Online</title>
</head>
<body>

    
    <header>@include('dashboard.partials.nav-header-admin')</header>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <br><br>
        <div class="container p-6">
            <div class="card">
                
                <div class="card-header">
                    <a href="{{route('empleados.create')}}" class="btn btn-primary">Crear</a>
                    <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Nombres
                            </td>
                            <td>
                                Apellidos
                            </td>
                            <td>
                                Teléfono
                            </td>
                            <td>
                                Dirección
                            </td>
                           
                         
                            <td>
                                Creado
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                        
                    </body>

                    {{-- recorrer arreglo --}}
                    {{-- la variable categorias que se manda aqui se va a llamar categorias --}}
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>
                                {{$empleado->id}}
                            </td>
                            <td>
                                {{$empleado->Nombres}}
                            </td>
                            <td>
                                {{$empleado->Apellidos}}
                            </td>
                            <td>
                                {{$empleado->Telefono}}
                            </td>
                            <td>
                                {{$empleado->Direccion}}
                            </td>
                       

                           
                            
                            <td>
                                {{$empleado->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$empleado->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('empleados.show',$empleado->id)}}" class="btn btn-outline-info">Ver</a>
                                <a href="{{route('empleados.edit',$empleado->id)}}" class="btn btn-outline-warning">Actualizar</a>
                                                        
                                <form method="POST" action="{{route('empleados.destroy',$empleado->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger ms-5" type="submit">Borrar</button>
                                </form >

                            </td>
                        </tr>
                       
                    @endforeach
                        
                </Thead>
                <br>
            
            
            </table>
            @if ($empleados->hasPages())
            <div class="px-6 py-4">
                {{$empleados->links()}}
            </div>
            
            @endif
            
            </div>
            
            

            
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>