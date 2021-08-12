<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PKCG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Bootstrap CSS -->
  	<link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" >
   <!-- estilo CSS -->
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<!--add icone superior na barra -->
	<link rel="icon" type="image/png" href="imagens/pikachusemfundo.png" id="icone">
</head>
<body >
<header>
	
	<div >
	   <nav class="navbar navbar-expand-lg navbar-light bg-light">
	    <form class="d-flex" style="padding: 10px; margin-right: 10px;">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	    </form>
	    <a href="index.php" class="navbar-brand">Pokémon</a>
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
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_primeirageração.php">Geração 1</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_segunda.php">Geração 2</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_terceira.php">Geração 3</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_quarta.php">Geração 4</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_quinta.php">Geração 5</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_sexta.php">Geração 6</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_setima.php">Geração 7</a></li>
	            <li><a class="dropdown-item" href="todos_pokemons/pokedex_oitava.php">Geração 8</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="todos_pokemons/allpoke.php">Todas as gerações</a></li>
	          </ul>
	        </li>
	      </ul>
	    </nav>
    </div>
     
			<div id="logo_header" class="align-itens-center">
				<h1>Pokémon </h1>
				<div>
					<img class="mt-4 mb-4" src="imagens/pikachu.png" style="width:130px;border-radius:70%;">
				</div>
				
				<a href="#cadastro"><button  type="submit"  class="btn btn-primary btn-lg">Gotta Catch 'Em All!</button></a>
			</div>
					
</header>
<section class="container">
	<div class="row">
		<div class="col-12 mt-4">
			<h1>Nosso jogo</h1>
			
				<p>O jogo ainda esta em fase de desenvolvimento a ideia é que seja algo de card game com turnos e estrategias a la <a href="https://cdn.ome.lt/TCXhGfvC90b0kOqlOZIAjCcZoNg=/480x270/smart/uploads/conteudo/fotos/fire-emblem-gba_wINVU18.png" target="blank"><i>Fire Emblem</i></a> usando as melhores ideias de um RPG 
				classico com o rpg de turno ja presentes na serie de jogos Pokemon, uma jogo com uma historia menos infantilizada e com atos e consequencias mais drasticas onde o jogador se sinta realmente desafiado a pensar e seja estrategico de uma maneira que os jogos de pokemons que embora eu tenha um carinho muito grande, tenha uma deficiencia, tendo um modelo competitivo onde quase 90% da maioria dos pokemons são peso de papel.</p>
				<p>Quero trazer algo que desafie o jogador, e que seja divertido ao mesmo tempo Conto com voces para sugestoes e ideias atenciosamente Equipe CardFantasy</p> 

			
		</div>
		
	</div>
	<div>
		<div class="row" id="jogos">
			<div class="col-xs-12 col-md-6 mt-4" >
				<h1>Jogos</h1>
				<p>Pokémon é uma das franquias mais conhecidas e aclamadas no mundo dos games.</p>
				<p>Produzido pela Gamefreak e publicado pela Nintendo, até o momento temos 25 jogos da série principal separados em 8 Gerações, sem contar com os relançamentos!</p>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Saiba mais
				</button>
			</div>
			<div class="col-xs-12 col-md-6 mt-4" id="Iniciais" >
				<h1>Iniciais</h1>
				<p>A cada nova geração anunciada, todo fã de Pokémon fica ansioso para saber, dentre outras coisas, quais serão os Pokémons Iniciais daquela região.</p>
				<p>Eles serão seus primeiros companheiros na aventura e costumam ser muito fortes. </p>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#IniciaisModal">
				  Saiba mais
				</button>
			</div>
		</div>
		<div class="row">
		
			<div class="col-xs-12 col-md-6 mt-2 mb-4" >
				<h1>Tipos</h1>
				<p>No mundo Pokémon, as criaturas podem ter até 2 tipos dentre os 18 existentes. Já os "golpes" possuem somente 1 tipo.</p>
				<p>Cada tipo possui vantagens e desvantagens contra outros tipos e caso um pokemon use um "golpe" que possui o mesmo tipo que o seu, o mesmo pode ganhar um bônus por conta disso.</p>
				<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TiposModal">
			  Saiba mais
			</button>
			</div>
			<div class="col-xs-12 col-md-6 mt-2 mb-4" >
				<h1>Visão</h1>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Launch demo modal
				</button>
			</div>
		</div>
	</div>
<footer>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<img src="imagens/TREINADOR BRUNO E ESPOSA - ARTE FINAL.png" class="img-responsive" style="width:70%;">
		</div>
		<div class="col-xs-12 col-md-6">
			<h1>Desenhos personalizados</h1>
			Quem nunca sonhou em ser um mestre pokemon ter seus proprios pokemons sua equipe e se tornar o maior campão da liga pokemon.
			Gabriel torna os sonhos das pessoas possiveis atraves de desenhos personalizados onde voce pode finalmente se tornar um mestre pokemon. 
			<a href="desenhos.php">Clique aqui</a>
		</div>
	</div>
</footer>
</section>
	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jogos Pokemon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  			<div class="row mt-2" style="border-bottom: 1px solid black;">
      		<div class="col-4">
      			<img src="imagens/greenversion.jpg" style="width:70%;" >
      		</div>
      		<div class="col-8">
      			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      			<div class="mt-2 mb-2">
      				<button class="btn btn-primary" onclick="redireciona_jogos()">Todos os Jogos</button>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<!--Iniciais-->

<div class="modal fade" id="IniciaisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciais</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div class="row mt-2" style="border-bottom: 1px solid black;">
      		<div class="col-4">
      			<img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" style="width:70%;" >
      			<img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png" style="width:70%;" >
      			<img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png" style="width:70%;" >
      		</div>
      		<div class="col-8">
      			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      			<div class="mt-2 mb-2">
      				<button class="btn btn-primary" onclick="redireciona()">Todos os iniciais</button>
      			</div>
      		</div>
      	</div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button> 
      </div>
    </div>
  </div>
</div>


<!--tipos-->
<div class="modal fade" id="TiposModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tipos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div class="row mt-2" style="border-bottom: 1px solid black;">
      		<div class="col-12">
      			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      			<div class="mt-2 mb-2">
      				<button class="btn btn-primary" onclick="redireciona()">Todos os Tipos</button>
      			</div>
      		</div>
      	</div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button> 
      </div>
    </div>
  </div>
</div>


</body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript">
    	function redireciona(){
    		window.location.href = "iniciais.php";
    	}

    	function redireciona_jogos(){
    		window.location.href = "jogos.php";
    	}
    </script>
</html>