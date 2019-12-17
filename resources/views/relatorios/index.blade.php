@extends('layouts.navbarFeed')

@section('content')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-sm-12 col-md-6">
      <h3 class="login-heading mb-4">Relatórios <strong class="text-danger">ON</strong>!</h3>
        <form method="post" action="{{route('resultadoRelatorio')}}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <div class="input-group mb-3">
                  <div class="login-heading mb-4">Aqui em relatórios você pode pesquisar comentários populares e todos os acontecimento do utimo mês. Basta você solicitar e ver se seu estabelecimento favorito está super <strong class="text-danger">ON</strong>!</div>
                  <div class="form-group">
                    <select name="consulta" class="custom-select">
                      <option selected="">Selecione um Relatório</option>
                      <option value="0">POPULARES (usuários ordenado pelo número de respostas que seus comentários tiveram)</option>
                      <option value="01">Janeiro</option>
                      <option value="02">Fevereiro</option>
                      <option value="03">Março</option>
                      <option value="04">Abril</option>
                      <option value="05">Maio</option>
                      <option value="06">Junho</option>
                      <option value="07">Julho</option>
                      <option value="08">Agosto</option>
                      <option value="09">Setembro</option>
                      <option value="10">Outubro</option>
                      <option value="11">Novembro</option>
                      <option value="12">Dezembro</option>
                    </select>
                  </div>
               </div> 
              <button name="submit" type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
            <div class="text-center">
        </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
@endsection
