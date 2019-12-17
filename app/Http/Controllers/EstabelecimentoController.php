<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento; 
use App\Cardapio;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $estabelecimentos = Estabelecimento::orderBy('nome', 'asc')->get();
        return view('estabelecimento/index', compact('estabelecimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estabelecimento/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estabelecimento = new Estabelecimento();
        $estabelecimento->nome = $request->input('nome');
        $estabelecimento->endereco = $request->input('endereco');
        $estabelecimento->horario_inicial = $request->input('hrInicio');
        $estabelecimento->horario_final = $request->input('hrFim');
        $estabelecimento->dias_funcionamento = $request->input('dias_funcionamento');
        $estabelecimento->classe = $request->input('classe');
        
        $estabelecimento->save();

        return redirect('/feed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estabelecimento = Estabelecimento::where('id_estabelecimento', $id)->get();
        $cardapios = Cardapio::where('id_estabelecimento', $id)->get();

        return view('estabelecimento/show', compact('estabelecimento','cardapios'));
    }

    public function avaliar($id){
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
