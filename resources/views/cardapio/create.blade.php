@extends('layouts.navbarFeed')

@section('content')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
      <h3 class="login-heading mb-4">Novo Cardápio <strong class="text-danger">ON</strong>!</h3>
        <form method="post" action="{{ route('salvarCardapio') }}" enctype="multipart/form-data">
            @csrf
            <p>Campos com <span class="text-danger">*</span> são obrigatórios</p>

            <div class="form-label-group">
              <input type="hidden" name="idUsuario" value="{{ Auth()->user()->id}}">
              <select class="custom-select" name="estabelecimento">
                <option selected="">Selecionar estabelecimento referente ao cardápio <span class="text-danger">*</span></option></option>
                @foreach($estabelecimentos as $estabelecimento)
                <option value="{{$estabelecimento->id_estabelecimento}}">{{$estabelecimento->nome}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <div class="input-group mb-3">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="fotoCardapio" id="fotoCardapio">
                      <label class="custom-file-label" for="fotoCardapio">Escolher foto do cardápio <span class="text-danger">*</span></label>
                  </div>
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
