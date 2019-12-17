@extends('layouts.navbarFeed')

@section('content')

@foreach($estabelecimento as $estab)
<div class="container mt-3 d-flex justify-content-center">
  <div class="row mt-3">
    <div class="col-12">
       <h3 class="text-center">Avaliando {{$estab->nome}}</h3>      
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="row mt-3">
    <div class="col ">
      <div class="card-deck">
        <div class="card">
          <div class="row">
            <div class="col-md-6 col-sm-12 mt-3">
              <img src="/imgs/estab.png" width="250px" height="130px">
              <p class="text-left">
                <b>Endereço:</b> {{$estab->endereco}} <br>
                <b>Nota média:</b> {{$estab->nota_media}} <br>
                <b>Faixa de preço:</b> {{$estab->classe}}<br>
                <b>Dias de funcionamento:</b> {{$estab->dias_funcionamento}}<br>
                <b>Horário de funcionamento:</b> {{$estab->horario_inicial}} às {{$estab->horario_final}}<br>
              </p>
            </div>
            <div class="col-md-6 col-sm-12 mt-3">
              <form method="post" action="{{ route('salvarAvaliacao') }}">
                @csrf
                <p>Campos com <span class="text-danger">*</span> são obrigatórios</p>

                <input type="hidden" name="idEstab" value="{{$estab->id_estabelecimento}}">
                <input type="hidden" name="idUsuario" value="{{ Auth()->user()->id}}">

                <div class="form-label-group">
                  <input type="name" id="comentario" name="comentario" class="form-control" value="" required>
                  <label for="comentario">Comentário sobre o estabelecimento <span class="text-danger">*</span></label>  
                </div>

                <div class="form-label-group">
                  <input type="number" id="nota" name="nota" class="form-control" value="" required>
                  <label for="nota">Dê uma nota de 1 a 5 <span class="text-danger">*</span></label>  
                </div>
                
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Enviar comentário com avaliação</button>
                <div class="text-center">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
