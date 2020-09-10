<?php

namespace App\Http\Controllers;

use App\Alunos;
use App\Turmas;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::all();
        return view('alunos/list', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turmas = Turmas::all();
        return view('alunos/create',  ['turmas' => $turmas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Alunos;

        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->email = $request->email;
        $aluno->status = $request->status;
        $aluno->turma_id = $request->turma;

        $aluno->save();
        return redirect('alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show(Alunos $alunos)
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
        $aluno = Alunos::find($id);
        $turmas = Turmas::all();
        return view('alunos/edit', ['aluno' => $aluno, 'turmas' => $turmas]);
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
        $aluno = Alunos::find($id);

        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->email = $request->email;
        $aluno->status = $request->status;
        $aluno->turma_id = $request->turma;

        $aluno->save();
        return redirect('alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Alunos::destroy($id);
        return true;
    }
}
