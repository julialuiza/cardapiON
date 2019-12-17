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
	              <b>Nota média:</b> {{$estab->nota_media}} <br>
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
	        		<a href="{{route('avaliarEstabelecimento', $estab->id_estabelecimento)}}" class="btn btn-sm btn-block bg-warning text-dark" role="button">AVALIAR ESTABELECIMENTO</a>
	        	</div>
	        </div>
	        <hr>
	        <div class="row">
	          <div class="col-md-6 mt-2 col-sm-12">
	            <h6 class="text-center">Últimas fotos de cardápios/pratos</h6>

	            <!-- for each aqui fotos de cardapio e produtos-->
	            @foreach($cardapios as $cardapio)
	            <div class="col-12 text-center">
	              <img src="{{ url('storage/cardapios/'.$cardapio->foto_cardapio) }}" width="300px">
	              <p class="text-center ">
	                <b>Enviado por:</b> nome usuario<br>
	              </p>
	              <hr width="350px">
	            </div>
	            @endforeach
	          
	          </div>
	          <div class="col-md-6 mt-2 col-sm-12">
	            <h6 class="text-center">Avaliações</h6>
	             <!-- for each aqui comentarios e respostas_comentario-->
	              <div class="col-12 text-center">
	                <form method="POST" action="atualizaComentarios">
	                  <input type="hidden" id="comentarioID" name="comentarioID" value="#">
	                  <p class="text-center text-justify">
	                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue lectus, tristique et tellus sed, ullamcorper porttitor tellus. Nunc et lacus quam.
	                  </p>
	                  <p class="text-right"><b>Fulano em 19/10/2019</b><br></p>
	                  <p class="text-left"><b>Respostas</b><br></p>
	                  <hr>
	                  <p class="text-left text-justify">
	                    Lorem ipsum dolor sit amet.
	                  </p>
	                  <p class="text-right"><b>Fulano em 22/10/2019</b><br></p>
	                  <hr>
	                  <textarea id="respostaComentario" name="respostaComentario" rows="2" cols="50">
	                  </textarea>
	                  <a href="{{route('avaliarEstabelecimento', $estab->id_estabelecimento)}}" class="btn btn-sm btn-block bg-warning text-dark" role="button">RESPONDER COMENTÁRIO</a>
	                  <hr width="350px">
	               </form>
	             </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endforeach
@endsection
