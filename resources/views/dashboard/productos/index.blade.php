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
                    <a href="{{route('productos.create')}}" class="btn btn-primary">Crear</a>
                    <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>

                            <td>
                                Producto
                            </td>

                            <td>
                                Precio
                            </td>

                            <td>
                                Marca
                            </td>

                            <td>
                                Estado
                            </td>
                           
                            <td>
                                Código
                            </td>

                            <td>
                                Imagen
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
                    @foreach ($productos as $producto)
                        <tr>
                            <td>
                                {{$producto->id}}
                            </td>
                            <td>
                                {{$producto->NombreProducto}}
                            </td>
                            <td>
                                {{$producto->Precio}}
                            </td>
                            <td>
                                {{$producto->Marca->NombreMarca}}
                            </td>
                            
                                @if ($producto->Estado==1)
                                <td ><span class="badge rounded-pill text-bg-danger">Borrador</span></td>
                                @else
                                <td ><span class="badge rounded-pill text-bg-success">Publicado</span></td>
                                @endif
                                
                            
                            
                            <td>
                                {{$producto->Codigo}}
                            </td>

                            <td>
                                <img src="{{asset($producto->Imagen)}}" width="50" height="50" class="img img-responsive">
                            </td>
                           
                            <td>
                                {{$producto->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$producto->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('productos.show',$producto->id)}}" class="btn btn-outline-info">Ver</a>
                                <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-outline-warning">Actualizar</a>
                                                        
                                <form method="POST" action="{{route('productos.destroy',$producto->id)}}">
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
            @if ($productos->hasPages())
            <div class="px-6 py-4">
                {{$productos->links()}}
            </div>
            
            @endif
            
            </div>
            
            

            
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>