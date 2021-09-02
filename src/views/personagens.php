<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/personagens.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.bundle.min.js">
    <title>Personagens</title>
</head>
<body class="d-flex flex-column h-100">
    
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Personagens</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5">Todos os personagens de Star Wars</h1>
        <p class="lead">Aqui você pode saber mais sobre os personagens de Star Wars de que planetas eles são!</p>
      </div>
    </main>


    <div class="container-fluid">

    <div class="row">
        <div class="col-md-4">

            <div id="content_search"><input type="text>" value="" id="search"/><button class="btn btn-info" type="button" value="" id="searchPersonagem">Buscar</button></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Cor dos Olhos</th>
                    <th scope="col">Cor do Cabelo</th>
                    </tr>
                </thead>
                <tbody id="bodypersonagens">
                </tbody>
            </table>
        </div>
        <div class="col-md-8" id="bodyplaneta">
        </div>
    </div>

    </div>



</body>
</html>

<script src="../assets/js/config.js"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/personagens.js"></script>