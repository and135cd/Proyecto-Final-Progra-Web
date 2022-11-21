<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoPost;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    public function index()
    {
        $productos=Producto::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.products.index',['productos'=>$productos]);
    }

    public function create()
    {
        $sucursals=Sucursal::all();
        $marcas=Marca::all();
        return view('dashboard.products.create',compact('marcas','sucursals'));
    }

    public function store(StoreProductoPost $request)
    {
        $requestData=$request->all();
        $fileName=time().$request->file('image_path')->getClientOriginalName();
        $path=$request->file('image_path')->storeAs('imagenes',$fileName,'public');
        $requestData['image_path']='/storage/'.$path;
        Producto::create($requestData);

        return redirect('productos/create')->with('status', 'El producto ha sido creado con exito');
    }

    public function show(Producto $producto)
    {
        $sucursals=Sucursal::all();
        $marcas= Marca::all();
        echo view('dashboard.products.show', compact('producto','sucursals','marcas'));
    }

    public function edit(Producto $producto)
    {
        $sucursals=Sucursal::all();
        $marcas= Marca::all();
        echo view ('dashboard.products.edit',compact('producto','marcas','sucursals')); 
    }

    public function update(StoreProductoPost $request, Producto $producto)
    {
        $producto->update($request->validated());

        return back()->with('status', 'El producto ha sido creado con exito');
       
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return back()->with('status','Producto eliminado exitosamente');
    }

}
