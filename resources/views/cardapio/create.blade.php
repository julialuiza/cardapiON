@extends('layouts.navbarFeed')

@section('content')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
      <h3 class="login-heading mb-4">Novo Cardápio <strong class="text-danger">ON</strong>!</h3>
        <form method="post" action="{{ route('/logar') }}">
             @csrf
            <div class="form-label-group">
              <input type="name" id="nome" name="nome" class="form-control" placeholder="Nome do estabelecimento" value="" required>
              <label for="endereco">Selecione estabelecimento <span class="text-danger">*</span></label>  
            </div>

            <div class="form-group">
                <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02">Escolher foto do cardápio <span class="text-danger">*</span></label>
                </div>
                
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Enviar</button>
            <div class="text-center">
        </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
@endsection
