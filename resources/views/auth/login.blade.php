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
                <h3 class="login-heading mb-4">Bem vindo(a) de volta ao Cardapi<strong class="text-danger">ON</strong>!</h3>
                <form method="POST" action="{{ route('login') }}">
                     @csrf
                    <div class="form-label-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" class="form-control" placeholder="Email address" required autofocus>
                        
                    </div>

                    <div class="form-label-group">
                        <label for="Senha">Senha</label>
                        <input type="password" id="Senha" class="form-control" placeholder="Password" required>
                        
                    </div>

                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
                    <div class="text-center">
                    <a class="small" href="#">Esqueci minha senha</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
