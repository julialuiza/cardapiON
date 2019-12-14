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

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">cardapi<strong class="text-danger">ON</strong></a>
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

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-6">Cardapi<strong class="text-danger">ON</strong></h1>
        <h2 class="masthead-subheading mb-0">Coleção de cardápios de restaurantes, lanchonetes, etc.</h2>
        <a href="#sobre" class="btn btn-primary btn-xl rounded-pill mt-5">saiba mais sobre o projeto</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section id="sobre">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" href="imgs/team.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Colaborativo</h2>
            <p class="text-justify">Qualquer pessoa pode realizar cadastro neste site e em seguida colaborar com o projeto enviando foto de cardápios, cadastrando locais, avaliando outros restaurantes/lanchonetes/pizzarias e também realizando comentários.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="imgs/mobile.png" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Prático</h2>
            <p class="text-justify">Antes de ir para um restaurante ou para uma pizzaria, consulte rapidamente o cardápio fazendo uma busca aqui em nosso site, mantendo-se informado sobre a faixa de preço do local, variedade de opções, comentários, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="imgs/chat.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Interativo</h2>
            <p class="text-justify">Através dos comentários e respostas aos comentários, interaja diretamente com pesssoas que frequentam os mesmos locais que você ou pretendam frequentar, compartilhando dicas de pratos, média de preços e o que esperar sobre o local.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; CardapiON 2019</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>


