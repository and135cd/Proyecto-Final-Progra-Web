<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Tienda Online</a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
            @auth
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"  href={{route('productos.index')}}>Tabla Productos</a></li>
                    <li><a class="dropdown-item"  href={{route('productos.create')}}>Ingreso Productos</a></li>
                    </ul>
                </li>
                <form style="display:inline" action="/logout" method="POST">
                    @csrf
                    <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
                </form>

            @else
                <li class="nav-item">
                    <a class="nav-link " href="/login">Login<span class="sr-only"></span></a>
                </li>
            @endauth
        
            </ul>
            <ul class="navbar-nav">
            
        
        </ul>
        </div>
       
        
        
        
      
      
      @if(session('status'))
        <br>
        {{session('status')}}
      @endif




      
    </div>
</nav>