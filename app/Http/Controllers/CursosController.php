<?php

namespace App\Http\Controllers;

use App\Cursos;
use App\Escolas;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::all();
        return view('cursos/list', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escolas = Escolas::all();
        return view('cursos/create',  ['escolas' => $escolas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Cursos;

        $curso->nome = $request->nome;
        $curso->sigla = $request->sigla;
        $curso->escola_id = $request->escola;

        $curso->save();
        return redirect('cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos $cursos)
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
        $curso = Cursos::find($id);
        $escolas = Escolas::all();
        return view('cursos/edit', ['curso' => $curso, 'escolas' => $escolas]);
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
        $curso = Cursos::find($id);

        $curso->nome = $request->nome;
        $curso->sigla = $request->sigla;
        $curso->escola_id = $request->escola;

        $curso->save();
        return redirect('cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Cursos::destroy($id);
        return true;
    }
}
