<?php

namespace App\Http\Controllers;

use App\Series;
use App\Cursos;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::all();
        return view('series/list', ['series' => $series]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Cursos::all();
        return view('series/create',  ['cursos' => $cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serie = new Series;

        $serie->nome = $request->nome;
        $serie->sigla = $request->sigla;
        $serie->descricao = $request->descricao;
        $serie->curso_id = $request->curso;

        $serie->save();
        return redirect('series');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function show(Series $series)
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
        $serie = Series::find($id);
        $cursos = Cursos::all();
        return view('series/edit', ['serie' => $serie, 'cursos' => $cursos]);
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
        $serie = Series::find($id);

        $serie->nome = $request->nome;
        $serie->sigla = $request->sigla;
        $serie->descricao = $request->descricao;
        $serie->curso_id = $request->curso;

        $serie->save();
        return redirect('series');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Series::destroy($id);
        return true;
    }
}
