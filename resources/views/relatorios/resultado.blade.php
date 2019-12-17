@extends('layouts.navbarFeed')

@section('content')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
      <h3 class="login-heading mb-4">Relatórios <strong class="text-danger">ON</strong>!</h3>

      <h5>Total de comentários: {{$totalComentarios}}</h5><br>
      <h5>Média das notas: {{$mediaNotas}}</h5>
      <hr class="hr-custom">
      <h3 class="login-heading mb-4">Comentadores do mês</strong>!</h3>
        @foreach($usuarios as $comentario)
        <div class="card border-primary" style="max-width: 20rem;">
          <div class="card-header">{{$comentario->user->name}}</div>
        </div>
          <hr class="hr-custom">
        @endforeach
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
@endsection
