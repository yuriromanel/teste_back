<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();

        return response()->json($medicos,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $especialidade_id = $request->input('especialidade_id');
        $crm = $request->input('crm');
     
        $newMedicos = new Medico();
        $newMedicos->nome = $nome;
        $newMedicos->especialidade_id = $especialidade_id;
        $newMedicos->crm = $crm;
 
        $newMedicos->save();

        return response()->json($newMedicos,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nome = $request->input('nome');
        $especialidade_id = $request->input('especialidade_id');
        $crm = $request->input('crm');

        $updateMedico = Medico::find($id);
        $updateMedico->nome = $nome;
        $updateMedico->especialidade_id = $especialidade_id;
        $updateMedico->crm = $crm;

        $updateMedico->save();

        return response()->json(['success'=>'atualizado com sucesso','resp'=>$updateMedico],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteMedico = Medico::find($id);
        $deleteMedico->delete();

        return response()->json(['success'=>'apagado com sucesso'],200);
    }
}
