@extends('layouts.navbarFeed')

@section('content')

@foreach($comentario as $coment)
<div class="container mt-3 d-flex justify-content-center">
  <div class="row mt-3">
    <div class="col-12">
       <h3 class="text-center">Respostas Comentário</h3>      
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
              <h5>Comentário</h5>
              <p class="text-left">
                {{$coment->conteudo}}
              </p>
            </div>
            <div class="col-md-6 col-sm-12 mt-3">
              <h5>Respostas</h5>
              <div class="row">
                @foreach($respostas as $resp)
                <div class="col-12">
                  <p>{{$resp->conteudo}}</p>
                  <hr class="hr-custom">
                </div>
                
                @endforeach
              </div>
              <div class="col-12">
                <form action="{{ route('responderComentario') }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="idComentario" value="{{$coment->id_comentario}}">
                  <input type="hidden" name="idEstab" value="{{$coment->id_estabelecimento}}">
                  <input type="hidden" name="idComentario" value="{{$coment->id_comentario}}">
                  <input type="hidden" name="idUsuario" value="{{ Auth()->user()->id}}">
                  <div class="form-label-group">
                    <input type="text" id="respComentario" name="respComentario" class="form-control" value="" required>
                    <label for="respComentario">Resposta ao comentário <span class="text-danger">*</span></label>  
                  </div>
                  <button class="btn btn-sm btn-block bg-warning text-dark" type="submit"><b>adicionar resposta</b></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
