<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Farmaco</title>
</head>
<body>
    
    <form action="{{route('clientes.store')}}" method="post"> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="NombreCliente" class="form-control form-floating mb-3" placeholder="Nombre" value="{{$cliente->NombreCliente}}">
                    <label for="text">Nombre</label>
                    @error('NombreCliente')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Nit" class="form-control form-floating mb-3" placeholder="Nit" value="{{$cliente->Nit}}">
                    <label for="text">Nit</label>
                    @error('Nit')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Correo" class="form-control form-floating mb-3" placeholder="Correo" value="{{$cliente->Correo}}">
                    <label for="text">Correo</label>
                    @error('Correo')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="Telefono" class="form-control form-floating mb-3" placeholder="Telefono" value="{{$cliente->Telefono}}">
                    <label for="text">Teléfono</label>
                    @error('Telefono')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" value="{{$cliente->Direccion}}">
                    <label for="text">Dirección</label>
                    @error('Direccion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                

                <center>
                    <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button> <br>
                    <a href="{{route('clientes.index')}}" class="btn btn-outline-info mt-3 btn-lg"><h4>Regresar</h4></a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>