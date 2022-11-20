<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Farmaco</title>
</head>
<body>
    
    <form action="{{route('marcas.store')}}" method="post"> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="NombreMarca" class="form-control form-floating mb-3" placeholder="Marca" value="{{$marca->NombreMarca}}">
                    <label for="text">Marca</label>
                    @error('NombreMarca')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <select name="IdCategoria" id="IdCategoria" class="form-control">
                        <option selected disabled value="">Seleccione una categoría</option>
                        @foreach ($categorias as $categoria)
                            @if ($marca->IdCategoria==$categoria->id)
                                <option selected value="{{$categoria->id}}" id="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
                            @else
                                <option value="{{$categoria->id}}" id="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('NombreMarca')
                        <small class="text-danger ">{{ $message }}</small>
                    @enderror
                </div>

                

                <center>
                    <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar cambios</h4></button> <br>
                    <a href="{{route('marcas.index')}}" class="btn btn-outline-info mt-3 btn-lg"><h4>Regresar</h4></a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>