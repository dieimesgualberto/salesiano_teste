<?php

namespace App\Http\Controllers;

use App\Turmas;
use App\Series;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turmas::all();
        return view('turmas/list', ['turmas' => $turmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Series::all();
        return view('turmas/create',  ['series' => $series]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turma = new Turmas;

        $turma->nome = $request->nome;
        $turma->sigla = $request->sigla;
        $turma->descricao = $request->descricao;
        $turma->turno = $request->turno;
        $turma->serie_id = $request->serie;

        $turma->save();
        return redirect('turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turmas  $turmas
     * @return \Illuminate\Http\Response
     */
    public function show(Turmas $turmas)
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
        $turma = Turmas::find($id);
        $series = Series::all();
        return view('turmas/edit', ['turma' => $turma, 'series' => $series]);
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
        $turma = Turmas::find($id);

        $turma->nome = $request->nome;
        $turma->sigla = $request->sigla;
        $turma->descricao = $request->descricao;
        $turma->turno = $request->turno;
        $turma->serie_id = $request->serie;

        $turma->save();
        return redirect('turmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Turmas::destroy($id);
        return true;
    }
}
