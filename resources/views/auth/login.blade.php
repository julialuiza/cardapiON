@extends('layouts.navbar')

@section('content')
 <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image-login"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Bem vindo(a) de volta ao Cardapi<strong class="text-danger">ON</strong>!</h3>
                <form method="post" action="{{ route('/logar') }}">
                     @csrf
                    <div class="form-label-group">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Seu email aqui" value="" required>
                      <label for="email">Email</label>  
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="senha" name="senha" class="form-control" placeholder="Sua senha secreta" value="" required>
                      <label for="senha">Senha</label>     
                    </div>

                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
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
