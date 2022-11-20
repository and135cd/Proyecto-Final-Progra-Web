<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpleadoPost;
use App\Http\Requests\StoreSucursalPost;
use App\Models\Departamento;
use App\Models\Empleado;
use App\Models\Sucursal;
use App\Models\TipoUsuario;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function index()
    {
        $empleados=Empleado::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.empleados.index',['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $sucursales=Sucursal::all();
        echo view ('dashboard.empleados.create',compact('sucursales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleadoPost $request)
    {
        Empleado::create($request->validated());
        return redirect('empleados/create')->with('status', 'Muchas gracias, el empleado ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        echo view('dashboard.empleados.show', ["empleado"=>$empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $sucursales=Sucursal::all();
        echo view ('dashboard.empleados.edit',compact('empleado','sucursales')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmpleadoPost $request, Empleado $empleado)
    {
        $empleado->update($request->validated());
        return back()->with('status', 'El emplaedo fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return back()->with('status','Empleado eliminado exitosamente');
    }
}
