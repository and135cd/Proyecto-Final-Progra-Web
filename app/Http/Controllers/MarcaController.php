<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    
    public function index()
    {
        $marcas=Marca::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.marcas.index',['marcas'=>$marcas]);
    }
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(Marca $marca)
    {
        
    }

   
    public function edit(Marca $marca)
    {
        
    }

    
    public function update(Request $request, Marca $marca)
    {
        
    }

    
    public function destroy(Marca $marca)
    {
        
    }
}
