<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento; 
use App\Cardapio;
use App\Comentario;
use App\Nota;

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
        $cardapios = Cardapio::where('id_estabelecimento', $id)->orderBy('created_at','desc')->get();
        $comentarios = Comentario::where('id_estabelecimento',$id)->orderBy('created_at','desc')->get();

        return view('estabelecimento/show', compact('estabelecimento','cardapios','comentarios'));
    }

    //pagina de avaliacao de estabelecimento
    public function avaliar($id){
        $estabelecimento = Estabelecimento::where('id_estabelecimento', $id)->get();
        return view('estabelecimento/avaliar',compact('estabelecimento'));
    }

    //salvando avaliacao de estabelecimento
    public function salvarAvaliacao(Request $request){
        $comentario = new Comentario();
        $comentario->conteudo = $request->input('comentario');
        $comentario->nota = $request->input('nota');
        $comentario->id_estabelecimento = $request->input('idEstab');
        $comentario->id_usuario = $request->input('idUsuario');
        $comentario->save();

        $id = $request->input('idUsuario');
        $comentarioAtual = Comentario::where('id_usuario',$id)->get();

        $nota = new Nota();
        $nota->id_usuario = $id;
        $nota->id_comentario = $comentarioAtual[0]->id_comentario;
        $nota->id_estabelecimento = $request->input('idEstab');
        $nota->nota = $request->input('nota');
        $nota->save();

        return redirect('/feed');
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
