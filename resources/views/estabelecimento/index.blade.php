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
		  <input class="form-control" type="search" placeholder="Nome do estabelecimento, tipo de comida, pratos.." aria-label="Pesquisar">
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
					  <b>Nota média:</b> {{$estabelecimento->nota_media}}
					</p>
				  </div>
				  <div class="card-footer bg-dark">
					<button class="btn btn-sm btn-block bg-dark text-white">VER MAIS</button>
				  </div>
				</div>
		  	</div>
		  	@endforeach
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

@endsection
