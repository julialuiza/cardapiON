<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Estabelecimento;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estabelecimentos = Estabelecimento::orderBy('nome', 'asc')->get();
        return view('produto/create',compact('estabelecimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nomePrato');
        $produto->preco = $request->input('precoProd');
        $produto->id_estabelecimento = $request->input('estabelecimento');
        
        //recuperar foto produto
        if ($request->hasFile('fotoProd')){
            $nomeFoto = uniqid(date('HisYmd'));
            $extensao = $request->file('fotoProd')->extension();
            $nomeSalvo = "{$nomeFoto}.{$extensao}";
            $upload = $request->fotoProd->storeAs('produtos', $nomeSalvo);
            $produto->foto = $nomeSalvo;
        }

        $produto->save();

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
