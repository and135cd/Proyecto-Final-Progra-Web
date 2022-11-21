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
        @include('dashboard.partials.nav-header-gerente')
        <br>
        
        <center><h1 class="mb-5">Ingreso de Usuario</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('usuarios.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control form-floating mb-3" placeholder="name" >
                            <label for="text">Ingrese el nombre</label>
                            @error('name')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control form-floating mb-3" placeholder="email" >
                            <label for="text">Ingrese el correo</label>
                            @error('email')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control form-floating mb-3" placeholder="password" >
                            <label for="text">Ingrese la contraseña</label>
                            @error('password')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="tipo" id="tipo" class="form-control">
                                <option selected disabled value="">Seleccione un tipo de usuario</option>
                               
                                <option value="1" id="1">Administrador</option>
                                <option value="2" id="2">Gerente</option>
                                <option value="3" id="3">Cliente</option>
                                
                            </select>


                            
                            @error('tipo')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>

                       
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('usuarios.index')}}" class="btn btn-outline-primary btn-lg mt-3">Regresar</a>
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