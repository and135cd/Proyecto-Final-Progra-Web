@extends('layouts.app')

@section('content')

<div>
    <center>
        <h1>
            <img src="https://teelweb.pe/wp-content/uploads/2018/12/Tiendas_Virtuales.png" height="5%" width="5%" alt="" class="mr-3"> 
            <strong>Store Online S.A </strong>
            <img src="https://teelweb.pe/wp-content/uploads/2018/12/Tiendas_Virtuales.png" height="5%" width="5%" alt="" class="ml-3"></h1> 
        
        <p>Venta de productos de tecnología</p>
        {{-- carrusel --}}
        <div id="carouselExampleIndicators" class="carousel slide c" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://media.gq.com.mx/photos/61e70ca25def32c5619cef06/16:9/w_1280,c_limit/Lenovo%20Yoga%20Slim%207%20Pro.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.blogdelfotografo.com/wp-content/uploads/2021/03/mega-guia-reflex-3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://media.ambito.com/p/446646efeacf790e305fd106ed77b099/adjuntos/239/imagenes/040/062/0040062250/730x0/smart/celularesjpg.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <h1 class="mt-5">La mejor Tienda de Tecnología. Computadoras, Teléfonos, Tablets, Audio, Impresoras y electrónicos en general. </h1>

    </center>
</div>
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{asset($pro->image_path)}}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 260px;display: block;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->name }}</h6></a>
                                    <p>${{ $pro->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    

    
@endsection



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
</head>
<body>
    
    <section class="row 3 mt-5 mb-5">
                        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
            </article>
            
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-1">
                <p><strong>Contactanos</strong>  <img src="https://assets.stickpng.com/thumbs/580b585b2edbce24c47b298b.png" width="90%" height="4%" alt=""></p>
            </article>

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-1 mt-3">
            <br><a title="Contactanos" target="_blank" rel="noopener" href="https://api.whatsapp.com/send?phone=50242779761&text=Tienda%20Online,%20Me%20brindarian%20mas%20informacion?%20:)">
                <center><img src="https://www.labolsera.com/modules/cdesigner/views/img/upload/418628dceb02a596976e72a10e896afff49562bc_whatsapp.png" alt="" width="50%" height="5%">
            </a>
        </article>

            
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
           
        </article>  

    </section>
</body>
</html>