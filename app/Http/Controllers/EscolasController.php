<?php

namespace App\Http\Controllers;

use App\Escolas;
use Illuminate\Http\Request;

class EscolasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolas = Escolas::all();
        return view('escolas_list', ['escolas' => $escolas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escolas_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escola = new Escolas;

        $escola->nome = $request->nome;
        $escola->sigla = $request->sigla;
        $escola->cidade = $request->cidade;
        $escola->estado = $request->estado;

        $escola->save();
        return redirect('escolas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escolas  $escola
     * @return \Illuminate\Http\Response
     */
    public function show(Escolas $escolas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $escola = Escolas::find($id);
        return view('escolas_edit', ['escola' => $escola]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $escola = Escolas::find($id);

        $escola->nome = $request->nome;
        $escola->sigla = $request->sigla;
        $escola->cidade = $request->cidade;
        $escola->estado = $request->estado;

        $escola->save();
        return redirect('escolas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Escolas::destroy($id);
        {
            Escolas::destroy($id);
            return true;
        }
    }
}
