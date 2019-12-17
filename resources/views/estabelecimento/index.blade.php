@extends('layouts.navbarFeed')

@section('content')

<div class="container mt-3 d-flex justify-content-center">
	<div class="row mt-3">
	  <div class="col-12">
		 <h2 class="text-center">Estabelecimentos Disponíveis</h2>      
	  </div>
	  <div class="col-12">
		<!-- form de busca-->
		<form method="POST" action="#">
		  <input class="form-control" type="search" name="busca" placeholder="Nome do estabelecimento, faixa de preço ($, $$, $$$, $$$$ ou $$$$$$), pratos.." aria-label="Pesquisar">
		  <button class="btn btn-sm btn-warning btn-block" type="submit"><b>PESQUISAR</b></button>
		</form>
	  </div> 
	</div>
</div>
 

<div class="container mt-3">
	<div class="row mt-3">
		<div class="col-md-3"></div>
		<div class="col-sm-12 col-md-6">
			@foreach($estabelecimentos as $estabelecimento)
		  	<div class="card-deck mt-3">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title">{{$estabelecimento->nome}}</h4>
					<hr>
					<p class="card-text">
					  <b>Localização:</b> {{$estabelecimento->endereco}} <br>
					  <b>Faixa de preço:</b> {{$estabelecimento->classe}} <br>
					  <b>Nota média:</b> {{$estabelecimento->media_nota}}
					</p>
				  </div>
				  <div class="card-footer bg-dark">
				  	<a href="{{route('detalheEstabelecimento', $estabelecimento->id_estabelecimento)}}" class="btn btn-sm btn-block bg-dark text-white" role="button">VER MAIS</a>
				  </div>
				</div>
		  	</div>
		  	@endforeach
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

@endsection
