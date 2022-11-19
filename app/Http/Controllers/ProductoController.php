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
        echo view('dashboard.products.index',['productos'=>$productos]);
    }

    public function create()
    {
        $marcas=Marca::all();
        return view('dashboard.products.create',compact('marcas'));
    }

    public function store(StoreProductoPost $request)
    {
        $requestData=$request->all();
        $fileName=time().$request->file('Imagen')->getClientOriginalName();
        $path=$request->file('Imagen')->storeAs('imagenes',$fileName,'public');
        $requestData['Imagen']='/storage/'.$path;
        Producto::create($requestData);

        return redirect('productos/create')->with('status', 'El producto ha sido creado con exito');
    }

    public function show(Producto $producto)
    {
        echo view('dashboard.products.show', ["producto"=>$producto]);
    }

    public function edit(Producto $producto)
    {
        $marcas= Marca::all();
        echo view ('dashboard.products.edit',compact('producto','marcas')); 
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
