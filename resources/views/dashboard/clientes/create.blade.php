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
        
        <center><h1 class="mb-5">Ingreso de Clientes</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('clientes.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                        <div class="form-floating mb-3">
                            <input type="text" name="NombreCliente" class="form-control form-floating mb-3" placeholder="Nombre Cliente" >
                            <label for="text">Ingrese el nombre del cliente</label>
                            @error('NombreCliente')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Nit" class="form-control form-floating mb-3" placeholder="Nit" >
                            <label for="text">Ingrese el Nit del cliente</label>
                            @error('Nit')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Correo" class="form-control form-floating mb-3" placeholder="Correo" >
                            <label for="text">Ingrese el correo del cliente</label>
                            @error('Correo')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="Telefono" class="form-control form-floating mb-3" placeholder="Telefono" >
                            <label for="text">Ingrese el tel??fono del cliente</label>
                            @error('Telefono')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        

                        <div class="form-floating mb-3">
                            <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" >
                            <label for="text">Ingrese la direcci??n del cliente</label>
                            @error('Direccion')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                       

                        


                        
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('clientes.index')}}" class="btn btn-outline-primary btn-lg mt-3">Regresar</a>
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