<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consulta;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = Consulta::all();

        return response()->json($consulta,200);
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
        $paciente_id = $request->input('paciente_id');
        $medico_id = $request->input('medico_id');
        $dt_consulta = $request->input('dt_consulta');
        $dt_agendamento = $request->input('dt_agendamento');
     
        $newConsulta = new Consulta();
        $newConsulta->paciente_id = $paciente_id;
        $newConsulta->medico_id = $medico_id;
        $newConsulta->dt_consulta = $dt_consulta;
        $newConsulta->dt_agendamento = $dt_agendamento;
 
        $newConsulta->save();

        return response()->json($newConsulta,200);
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
        $paciente_id = $request->input('paciente_id');
        $medico_id = $request->input('medico_id');
        $dt_consulta = $request->input('dt_consulta');
        $dt_agendamento = $request->input('dt_agendamento');

  
        $updateConsulta = Consulta::find($id);
        $updateConsulta->paciente_id = $paciente_id;
        $updateConsulta->medico_id = $medico_id;
        $updateConsulta->dt_consulta = $dt_consulta;
        $updateConsulta->dt_agendamento = $dt_agendamento;

        $updateConsulta->save();

        return response()->json(['success'=>'atualizado com sucesso','resp'=>$updateConsulta],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteConsulta = Consulta::find($id);
        $deleteConsulta->delete();

        return response()->json(['success'=>'apagado com sucesso'],200);
    }
}
