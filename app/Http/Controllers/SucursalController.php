<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSucursalPost;
use App\Models\Departamento;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals=Sucursal::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.sucursals.index',['sucursals'=>$sucursals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos=Departamento::all();
        echo view ('dashboard.sucursals.create',['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSucursalPost $request)
    {
        Sucursal::create($request->validated());
        return redirect('sucursals/create')->with('status', 'Muchas gracias, la sucursal ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        echo view('dashboard.sucursals.show', ["sucursal"=>$sucursal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        $departamentos=Departamento::all();
        echo view ('dashboard.sucursals.edit',['sucursal'=>$sucursal],['departamentos'=>$departamentos]); 
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSucursalPost $request, Sucursal $sucursal)
    {
        $sucursal->update($request->validated());
        return back()->with('status', 'La sucursal fue editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return back()->with('status','Sucursal eliminada exitosamente');
    }
}
