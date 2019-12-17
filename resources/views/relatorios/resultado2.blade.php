@extends('layouts.navbarFeed')

@section('content')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
      <h3 class="login-heading mb-4">Comentários com mais respostas</strong>!</h3>
      <hr class="hr-custom">
        @foreach($usuarios as $user)
        <div class="card border-primary" style="max-width: 20rem;">
          <div class="card-header">Comentário: {{$user->conteudo}}</div>
          <div class="card-header">Número de respostas: {{$user->num_respostas}}</div>
        </div>
          <hr class="hr-custom">
        @endforeach
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
@endsection
