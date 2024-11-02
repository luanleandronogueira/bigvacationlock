<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Big Vacation Lock">
  <meta name="author" content="Luan Leandro Nogueira">
  <title>Bigvacation Lock</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- css -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
      /* Adicione um estilo específico para telas menores, como celulares */
      @media (max-width: 767px) {
        /* Seletor para a tabela que você deseja adicionar o scroll horizontal */
        .sua-tabela {
          /* Defina a largura máxima da tabela para ativar o scroll horizontal quando necessário */
          max-width: 100%;
          /* Adicione um scroll horizontal quando o conteúdo excede a largura da tabela */
          overflow-x: auto;
          display: block; /* Adicione display: block para forçar a barra de rolagem horizontal */
        }
        /* Opcional: Remova as bordas da tabela para um visual mais limpo */
        .sua-tabela, .sua-tabela th, .sua-tabela td {
          border: none;
        }
      }
    </style>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <div>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-dark" href="#">Action</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
                </ul>
              </li>
            </div>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>