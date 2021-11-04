<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::all();

       

        $array['paciente'] = $paciente;

        return $array;
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
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $cep = $request->input('cep');
        $endereco = $request->input('endereco');
        $numero = $request->input('numero');
        $nome_responsavel = $request->input('nomeResponsavel');
        $idade = $request->input('idade');

        $newPaciente = new Paciente();
        $newPaciente->nome = $nome;
        $newPaciente->cpf = $cpf;
        $newPaciente->telefone = $telefone;
        $newPaciente->email = $email;
        $newPaciente->cep = $cep;
        $newPaciente->endereco = $endereco;
        $newPaciente->numero = $numero;
        $newPaciente->idade = $idade;

        if($idade < 18){
            $newPaciente->flag_menor = true;
            $newPaciente->nome_responsavel = $nome_responsavel;         
        }else{
            $newPaciente->nome_responsavel = 'Nao se aplica';
        }

        $newPaciente->save();

        return response()->json($newPaciente,200);
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
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $cep = $request->input('cep');
        $endereco = $request->input('endereco');
        $numero = $request->input('numero');

        $updatePaciente = Paciente::find($id);
        $updatePaciente->nome = $nome;
        $updatePaciente->cpf = $cpf;
        $updatePaciente->telefone = $telefone;
        $updatePaciente->email = $email;
        $updatePaciente->cep = $cep;
        $updatePaciente->endereco = $endereco;
        $updatePaciente->numero = $numero;
        if($idade < 18){
            $newPaciente->flag_menor = true;
            $newPaciente->nome_responsavel = $nome_responsavel;         
        }
        $updatePaciente->save();

        return response()->json(['success'=>'atualizado com sucesso','resp'=>$updatePaciente],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletePaciente = Paciente::find($id);
        $deletePaciente->delete();

        return response()->json(['success'=>'apagado com sucesso'],200);
    }
}
