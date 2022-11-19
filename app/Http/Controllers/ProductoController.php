<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoPost;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index()
    {
        $productos=Producto::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.productos.index',['productos'=>$productos]);
    }

    
    public function create()
    {
        $marcas=Marca::all();
        return view('dashboard.productos.create',compact('marcas'));
    }

    
    public function store(StoreProductoPost $request)
    {
        $requestData=$request->all();
        $fileName=time().$request->file('Imagen')->getClientOriginalName();
        $path=$request->file('Imagen')->storeAs('imagenes',$fileName,'public');
        $requestData['Imagen']='/storage/'.$path;
        Producto::create($requestData);
        return redirect('productos/create')->with('status','Producto creado exitosamente');
    }

    
    public function show(Producto $producto)
    {
        
    }

    
    public function edit(Producto $producto)
    {
        
    }

    
    public function update(Request $request, Producto $producto)
    {
        
    }

    
    public function destroy(Producto $producto)
    {
        
    }
}
