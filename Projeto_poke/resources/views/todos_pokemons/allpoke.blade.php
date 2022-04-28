<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PKCG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- estilo CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--add icone superior na barra -->
	<link rel="icon" type="image/png" href="imagens/pikachusemfundo.png" id="icone">
</head>
<body >
    <body>

        <header>
          <div >
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <form class="d-flex" style="padding: 10px; margin-right: 10px;">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <a href="../index.php" class="navbar-brand">Pokémon</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a  class="nav-link "href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link "href="#jogos">Jogos</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pokemons
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="pokedex_primeirageração.php">Geração 1</a></li>
                      <li><a class="dropdown-item" href="pokedex_segunda.php">Geração 2 </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="allpoke.php">Mais Gerações</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>    
        </header>
      
        <div class="container " style="text-align: center;">
          <div class="row">
            <div class="col-12">
              <h1>Pokedex</h1>
              <ul data-js="pokedex" class="pokedex"></ul>
            </div> 
          </div>
        </div>
      
      </body>
        
      
</html>
    <script type="text/javascript" src="js/all.js"></script>