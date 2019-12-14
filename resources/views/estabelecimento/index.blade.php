@extends('layouts.navbarFeed')

@section('content')

<div class="container mt-3 d-flex justify-content-center">
	<div class="row mt-3">
	  <div class="col-12">
		 <h3 class="text-center">Cardápios Disponíveis</h3>      
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
		<div class="col ">
		  <div class="card-deck">
			<div class="card">
			  <img src="imgs/estab.png" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">Nome Restaurante</h5>
				<p class="card-text">
				  <b>Localização:</b> {} <br>
				  <b>Nota média:</b> {}
				</p>
			  </div>
			  <div class="card-footer bg-black">
				<button class="btn btn-sm btn-block btn-outline-dark text-white">VER MAIS</button>
			  </div>
			</div>

			<div class="card">
			  <img src="imgs/estab.png" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">Nome Restaurante</h5>
				<p class="card-text">
				  <b>Localização:</b> {} <br>
				  <b>Nota média:</b> {}
				</p>
			  </div>
			  <div class="card-footer bg-black">
				<button class="btn btn-sm btn-block btn-outline-dark text-white">VER MAIS</button>
			  </div>
			</div>

			<div class="card">
			  <img src="imgs/estab.png" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">Nome Restaurante</h5>
				<p class="card-text">
				  <b>Localização:</b> {} <br>
				  <b>Nota média:</b> {}
				</p>
			  </div>
			  <div class="card-footer bg-black">
				<button class="btn btn-sm btn-block btn-outline-dark text-white">VER MAIS</button>
			  </div>
			</div>

			<div class="card">
			  <img src="imgs/estab.png" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">Nome Restaurante</h5>
				<p class="card-text">
				  <b>Localização:</b> {} <br>
				  <b>Nota média:</b> {}
				</p>
			  </div>
			  <div class="card-footer bg-black">
				<button class="btn btn-sm btn-block btn-outline-dark text-white">VER MAIS</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>
@endsection
