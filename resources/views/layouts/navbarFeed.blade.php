<!DOCTYPE html>
<html>
<head>
    <title>CardapiON</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <script type="text/javascript" src="{{url('/js/app.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estilo.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estiloForm.css') }}" />

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">cardapi<strong class="text-danger">ON</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">ACESSAR RELATÓRIOS</a>
          </li>
          <li class="nav-item dropdown">
            <a id="cadDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                CADASTRAR
            </a>
            <div class="dropdown-menu" aria-labelledby="cadDropdown">
                <a class="dropdown-item" href="{{ route('cadastroEstabelecimento') }}">
                  Cadastrar estabelecimento
                </a>
                <a class="dropdown-item" href="{{ route('cadastroCardapio')}}">
                  Cadastrar foto de cardápio
                </a>
                <a class="dropdown-item" href="{{ route('cadastroProduto')}}">
                  Cadastrar prato
                </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Bem vindo (a) ! <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-4 bg-white">
    @yield('content')
  </main>

</body>
</html>


