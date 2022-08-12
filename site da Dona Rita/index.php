<?php
	//alterei aqui
	//include("dados.php");
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<!-- //alterei aqui -->
				<li><a href="#Marmitas" title="Marmitas" alt="Marmitas">Marmitas</a></li>
				<li><a href="#Pedidos" title="Pedidos" alt="Pedidos">Pedidos</a></li>
				<li><a href="#Contato" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="logo">
			<img src="img/foto10.gif" alt="logo">
		</div>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
					<h1>Marmitas da Dona Rita Trazendo mais Sabor e Alegria para a sua Vida.</h1>
                    </header>
                    <p> Conheça a Nossa História</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<!-- //alterei aqui -->
				<h1><a name="tutorial">As Marmitas mais Vendidas</h1></a>
				<p>Escolha a que mais combine com o seu Gosto!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem Tutoriais no momento!!!";
		}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>                    
                    <h1>Cadastre-se para receber nossas novidades!!!</h1>
                    <p>Informe seu nome e e-mail clique em ok!</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<p>Todos os Direitos Reservados a José Roberto dos Santos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RA - 21016174-5</p>
	</footer>
</body>
</html>