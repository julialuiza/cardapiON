@extends('layouts.navbarFeed')

@section('content')

@foreach($estabelecimento as $estab)
<div class="container mt-3 d-flex justify-content-center">
	<div class="row mt-3">
	  <div class="col-12">
	     <h3 class="text-center">{{$estab->nome}}</h3>      
	  </div>
	</div>
</div>
  <!-- 
  pegar todos as fotos de cardapio e produtos e quem enviou ()
  pegar todas as avaliacoes junto com comentarios e respostas_comentario ()
  -->

<div class="container mt-3">
	<div class="row mt-3">
	  <div class="col ">
	    <div class="card-deck">
	      <div class="card">
	        <div class="row">
	          <div class="col-md-3"></div>
	          <div class="col-md-3 col-sm-12">
	            <img src="/imgs/estab.png" width="250px" height="130px">
	          </div>
	          <div class="col-md-4 col-sm-12 mt-3">
	            <p class="text-left">
	              <b>Endereço:</b> {{$estab->endereco}} <br>
	              <b>Nota média:</b> {{$estab->media_nota}} <br>
	              <b>Faixa de preço:</b> {{$estab->classe}}<br>
	              <b>Dias de funcionamento:</b> {{$estab->dias_funcionamento}}<br>
	              <b>Horário de funcionamento:</b> {{$estab->horario_inicial}} às {{$estab->horario_final}}<br>
	            </p>
	          </div>
	          <div class="col-md-3"></div>
	        </div>
	        <div class="row">
	        	<div class="col-md-6"></div>
	        	<div class="col-md-6 col-sm-12">
	        		<a href="{{route('avaliarEstabelecimento', $estab->id_estabelecimento)}}" class="btn btn-sm btn-block bg-warning text-dark" role="button"><b>AVALIAR ESTABELECIMENTO</b></a>
	        	</div>
	        </div>
	        <hr class="hr-custom">
	        <div class="row">
	          <div class="col-md-6 mt-2 col-sm-12">
	            <h6 class="text-center">Últimas fotos de cardápios/pratos</h6>
	            <hr class="hr-custom">
	            <!-- for each aqui fotos de cardapio e produtos-->
	            @foreach($cardapios as $cardapio)

	            <div class="col-12 text-center">
	              <img src="{{ url('storage/cardapios/'.$cardapio->foto_cardapio) }}" width="300px">
	              <hr width="350px">
	            </div>
	            @endforeach
	          
	          </div>
	          <div class="col-md-6 mt-2 col-sm-12">
	            <h6 class="text-center">Avaliações</h6>
	            <hr class="hr-custom">
	             <!-- for each aqui comentarios e respostas_comentario-->
	             @foreach ($comentarios as $comentario)

	              <div class="col-12 text-center">
	                <input type="hidden" id="comentarioID" name="comentarioID" value="#">
	                  <p class="text-center text-justify">
	                   {{$comentario->conteudo}}
	                  </p>
	                  <div class="row">
	                  	<div class="col-6">
	                  		<a href="{{route('acessarRespostas', $comentario->id_comentario)}}" class="btn btn-sm btn-block bg-warning text-dark" role="button"><b>acessar respostas</b></a>
	                  	</div>
	                  	<div class="col-6">
	                  		<a href="{{route('acessarRespostas', $comentario->id_comentario)}}" class="btn btn-sm btn-block bg-warning text-dark" role="button"><b>responder comentário</b></a>
	                  	</div>
	                  </div>
	                  <hr width="350px">
	              </div>
	             @endforeach
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endforeach
@endsection
