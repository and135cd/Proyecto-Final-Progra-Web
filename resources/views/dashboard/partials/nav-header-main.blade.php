<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/shop">Tienda Online</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item"  href={{route('productos.index')}}>Tabla Productos</a></li>
              <li><a class="dropdown-item"  href={{route('productos.create')}}>Ingreso Productos</a></li>
            </ul>
          </li>

         
       
        </ul>
       <ul class="navbar-nav">
        <li class="nav-item">
          @auth
          <li>
            <form style="display: inline"  action="/logout" method="POST">
                @csrf
                <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
            </form>
            </li>
           
          @else
          <a class="nav-link " href="/login">Login<span class="sr-only"></span></a>
          @endauth
        </li>
     
       </ul>
      </div>
    </div>
</nav>