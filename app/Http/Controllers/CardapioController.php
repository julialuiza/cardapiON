<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cardapio;
use App\Estabelecimento;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $estabelecimentos = Estabelecimento::orderBy('nome', 'asc')->get();
        
        return view('cardapio/create',compact('estabelecimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cardapio = new Cardapio();
        $cardapio->id_estabelecimento = $request->input('estabelecimento');
        $cardapio->id_usuario = $request->input('idUsuario');
        //recuperar foto cardapio
        $nomeFoto = uniqid(date('HisYmd'));
        $extensao = $request->file('fotoCardapio')->extension();
        $nomeSalvo = "{$nomeFoto}.{$extensao}";
        $upload = $request->fotoCardapio->storeAs('cardapios', $nomeSalvo);

        $cardapio->foto_cardapio = $nomeSalvo;

        $cardapio->save();
        
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
