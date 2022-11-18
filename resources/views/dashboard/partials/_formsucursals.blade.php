<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Sucursal</title>
</head>
<body>
    
    <form action="{{route('sucursals.store')}}" method="post"> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="Direccion" class="form-control form-floating mb-3" placeholder="Direccion" value="{{$sucursal->Direccion}}">
                    <label for="text">Direccion</label>
                    @error('Direccion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    
                    
                    <select name="IdDepartamento" id="IdDepartamento" class="form-control">
                        <option value="" disabled>Selecciona un departamento</option>
                        @foreach ($departamentos as $departamento)
                            @if($sucursal->IdDepartamento==$departamento->id)
                                <option selected value="{{$departamento->id}}" id="{{$departamento->id}}">{{$departamento->NombreDepartamento}}</option>
                            @else
                                <option value="{{$departamento->id}}" id="{{$departamento->id}}">{{$departamento->NombreDepartamento}}</option>
                            @endif

                        @endforeach
                    </select>


                    @error('IdDepartamento')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                

                <center>
                    <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button> <br>
                    <a href="{{route('sucursals.index')}}" class="btn btn-outline-info mt-3 btn-lg"><h4>Regresar</h4></a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>