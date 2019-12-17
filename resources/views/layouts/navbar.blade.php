<!DOCTYPE html>
<html>
<head>
    <title>CardapiON</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
   
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estilo.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estiloForm.css') }}" />

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">cardapi<strong class="text-danger">ON</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cadastro') }}">CADASTRAR-SE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">ENTRAR</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-4">
    @yield('content')
  </main>

</body>
</html>


