@extends('layouts.navbarFeed')

@section('content')
 <div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
       <h3 class="login-heading mb-4">Novo Estabelecimento <strong class="text-danger">ON</strong>!</h3>
        <form method="post" action="{{ route('salvarEstabelecimento') }}">
             @csrf

            <p>Campos com <span class="text-danger">*</span> são obrigatórios</p>
            <div class="form-label-group">
              <input type="name" id="nome" name="nome" class="form-control" placeholder="Nome do estabelecimento" value="" required>
              <label for="nome">Nome do estabelecimento <span class="text-danger">*</span></label>  
            </div>

            <div class="form-label-group">
              <input type="name" id="endereco" name="endereco" class="form-control" placeholder="Endereco do estabelecimento" value="" required>
              <label for="endereco">Endereço do estabelecimento <span class="text-danger">*</span></label>  
            </div>

            <div class="form-label-group">
              <input type="time" id="hrInicio" name="hrInicio" class="form-control" value="" required>
              <label for="hrInicio">Horário início: <span class="text-danger">*</span></label>
            </div>

            <div class="form-label-group">
              <input type="time" id="hrFim" name="hrFim" class="form-control" value="" required>
              <label for="hrFim">Horário fim: <span class="text-danger">*</span></label>
            </div>


            <div class="form-label-group">
              <select class="custom-select" name="dias_funcionamento">
                <option selected="">Selecionar dias de funcionamento <span class="text-danger">*</span></option>
                <option value="Segunda a Sexta">Segunda a Sexta</option>
                <option value="Segunda a Sábado">Segunda a Sábado</option>
                <option value="Domingo a Domingo">Domingo a Domingo</option>
              </select>
            </div>

            <div class="form-label-group">
              <select class="custom-select" name="classe">
                <option selected="">Selecionar faixa de preço do estabelecimento <span class="text-danger">*</span></option></option>
                <option value="$">$</option>
                <option value="$$">$$</option>
                <option value="$$$">$$$</option>
                <option value="$$$$">$$$$</option>
                <option value="$$$$$">$$$$$</option>
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
