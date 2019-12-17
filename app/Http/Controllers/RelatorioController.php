<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Estabelecimento; 
use App\Cardapio;
use App\Produto;
use App\Comentario;
use App\Nota;
use App\User;

use App\RespostasComentario;


class RelatorioController extends Controller
{
    public function index(Request $request){
    	return view('relatorios/index');
    }

    public function resultadoRelatorio(Request $request){
    	$opcao = $request->consulta;

    	if($opcao == '0'){

    		$usuarios = DB::select("SELECT comentarios.id_usuario AS usuario, comentarios.conteudo as conteudo,
		    			COUNT(respostas_comentarios.id_comentario) AS num_respostas
						FROM respostas_comentarios, comentarios
						WHERE respostas_comentarios.id_comentario = comentarios.id_comentario
						GROUP BY comentarios.id_usuario
						ORDER BY num_respostas DESC");
	

    		return view('relatorios/resultado2',compact('usuarios'));
    	}
    	else{
    		$comentarios = Comentario::whereMonth('created_at', '=', $opcao)->get();
    		$idUsuarios = Comentario::whereMonth('created_at', '=', $opcao)->select('id_usuario')->get();
    		$totalComentarios = $comentarios->count();
    		$somatotal = $comentarios->sum('nota');
    		$mediaNotas = $somatotal/$totalComentarios;
    		$usuarios = Comentario::with('user')->whereMonth('created_at', '=', $opcao)->groupBy('id_usuario')->get();
    		
    		return view('relatorios/resultado',compact('usuarios','totalComentarios','mediaNotas'));
    	}
    }
}
