@extends('layouts.navbar')

@section('content')
 <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Novo Prato <strong class="text-danger">ON</strong>!</h3>
                <form method="post" action="{{ route('/logar') }}">
                     @csrf
                    <div class="form-label-group">
                      <input type="name" id="nome" name="nome" class="form-control" placeholder="Nome o estabelecimento" value="" required>
                      <label for="nome">Nome do Prato</label>  
                    </div>

                    <div class="form-label-group">
                      <input type="name" id="nome" name="nome" class="form-control" placeholder="Nome do estabelecimento" value="" required>
                      <label for="endereco">Estabelecimento</label>  
                    </div>

                    <div class="form-label-group">
                        <label class="control-label">Preço do prato</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">R$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest real)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02">Escolher foto do Prato</label>
                        </div>
                        
                    </div>

                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Enviar</button>
                    <div class="text-center">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
