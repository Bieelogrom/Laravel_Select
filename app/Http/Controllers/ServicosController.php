<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function create()
    {
        return view('chamado');
    }

    public function index()
    {

        $chamados=Servicos::get();
        
        return view('chamados_abertos', compact('chamados'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
