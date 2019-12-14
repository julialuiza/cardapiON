@extends('layouts.navbarFeed')

@section('content')
 <div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
       <h3 class="login-heading mb-4">Novo Estabelecimento <strong class="text-danger">ON</strong>!</h3>
        <form method="post" action="{{ route('/logar') }}">
             @csrf
            <div class="form-label-group">
              <input type="name" id="nome" name="nome" class="form-control" placeholder="Nome o estabelecimento" value="" required>
              <label for="nome">Nome</label>  
            </div>

            <div class="form-label-group">
              <input type="name" id="endereco" name="endereco" class="form-control" placeholder="Endereco do estabelecimento" value="" required>
              <label for="endereco">Endereço</label>  
            </div>

            <div class="form-label-group">
              <input type="name" id="nome" name="nome" class="form-control" placeholder="Nome do Dono" value="" required>
              <label for="nome">Nome do Dono</label>  
            </div>

            <div class="form-label-group">
              <select class="custom-select" name="horario_funcionamento">
                <option selected="">Horários de Funcionamento</option>
                <option value="1">8h - 12h</option>
                <option value="2">12h - 17h</option>
                <option value="3">18h - 22h</option>
              </select>
            </div>

            <div class="form-label-group">
              <select class="custom-select" name="dias_funcionamento">
                <option selected="">Dias de Funcionamento</option>
                <option value="1">Segunda a Sexta</option>
                <option value="2">Segunda a Sábado</option>
                <option value="3">Domingo a Domingo</option>
              </select>
            </div>

            <div class="form-label-group">
              <select class="custom-select" name="classe">
                <option selected="">O restaurante é do tipo</option>
                <option value="1">Esforçado (vive de promoção)</option>
                <option value="2">Junior (nem tão caro, nem tão barato)</option>
                <option value="3">Senior (venha só de terno e gravata)</option>
              </select>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Enviar</button>
            <div class="text-center">
        </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
@endsection
