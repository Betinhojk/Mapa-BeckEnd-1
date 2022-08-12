<?php
	include("dados.php");
	//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

.main_tutorial img{
    width: 20%;
}

.main_tutorial p{
    margin: 0px 0;
	font-size: 1.6em;
	text-align: justify;
}

.main_tutorial h3{
    font-size: 1.0em;
}

.main_tutorial article{
    flex-basis: 90%;
    margin-bottom: 10px;
}

</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Marmitas" alt="Marmitas">Marmitas</a></li>
				<li><a href="#" title="Pedidos" alt="Pedidos">Pedidos</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>	
		<section class="main_tutorial">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					//echo "ID = ". $_GET['id'];
					$id = $_GET['id'];//validar o recebimento do id
					foreach($tutoriais as $key => $value){
						if($value['id'] == $id){
							//alterei aqui
							$data = new DateTime($value['data']);
					?>
						<header class="main_tutorial_header">
							<h1><?=$value['titulo'];?></h1>
							<!--alterei aqui-->
							<h3>Publicado em: <?=$data->format('d/m/Y');?></h3>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<p><?=$value['descricao'];?></p>			
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Veja Outra Opções</h1>
			</header>
			<?php
			$id = 0;
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
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
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
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