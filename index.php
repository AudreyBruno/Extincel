<?php
    if (isset($_POST['btnEnviar']) && $_POST['emailBoot'] === '') {
        //Variáveis
        $email = $_POST['email'];

        //Compo E-mail
        $arquivo = "
            <style type='text/css'>
                body{
                    margin:0px;
                    font-family:Verdane;
                    font-size:12px;
                    color: #000;
                }
            </style>
            <html>
                <table cellpadding='1' cellspacing='1' bgcolor='#fff'>
                    <tr>
                        <td>
                            <tr>
                                <td width='320'>E-mail:<b>$email</b></td>
                            </tr>
                        </td>
                    </tr>
                </table>
            </html>
        ";

        //enviar

        // emails para quem será enviado o formulário
        $emailenviar = "extincel@extincel.com.br";
        $destino = $emailenviar;
        $assunto = "Contato pelo Site(Tela Inicial)";

        // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:'.$email;
        //$headers .= "Bcc: $EmailPadrao\r\n";

        $enviaremail = mail($destino, $assunto, $arquivo, $headers);
        if($enviaremail){
            $mgm = "E-MAIL ENVIADO COM SUCESSO!";
            //echo $mgm;
        } else {
            $mgm = "ERRO AO ENVIAR E-MAIL!";
            //echo $mgm;
        }
    }
?>
<!DOCTYPE php>
<html>
	<head>
		<title>Extincel</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
        <meta name="description" content="EXTINCEL - Soluções em prevenção">
		<meta name="keywords" content="alarme,incendio,extintores,gás,chopp,iluminação,sinalização,emergência" />
        <meta name="author" content="" />

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/style_menu.css" rel="stylesheet" type="text/css">
        <link href="css/style_home.css" rel="stylesheet" type="text/css">
        <link href="css/style_rodape.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" >

  		<link rel="icon" type="image/x-icon" href="imagens/favicon.ico">
	</head>
	<body>
		<div class="teste"></div>
	    <header id="menu" class="header">
	    	<div class="container">
	    		<div>
	    			<a href="index.php">
	        			<div class="logo"></div><!--logo-->
	        		</a>
	        	</div>
	            <nav class="desktop-menu">
	            	<ul>
	                	<li><a href="index.php">Home</a></li>
	                    <li><a href="sobre.php">Sobre</a></li>
	                    <li><a href="servicos.php">Serviços</a></li>
	                    <li><a href="contato.php">Contato</a></li>
	                    <li><a href="catalogo.php">Catálogo</a></li>
	                </ul>
	            </nav>
	            <nav class="mobile-menu">
	            	<ul>
	                	<li><a href="index.php"><div>Home</div></a></li>
	                    <li><a href="sobre.php"><div>Sobre</div></a></li>
	                    <li><a href="servicos.php"><div>Serviços</div></a></li>
	                    <li><a href="contato.php"><div>Contato</div></a></li>
	                    <li><a href="catalogo.php"><div>Catálogo</div></a></li>
	                </ul>
	            </nav>
	        <div class="clear"></div><!--clear-->
	        </div><!--container-->
	    </header>

	    <section class="header_home">
			<div class="container">
				<div class="chamada1">
					<h2>Soluções em prevenção e combate a incêndio.</h2>
				</div><!--chamada1-->
				<div class="img_chamada1"><img src="imagens/imgHome.png"></div>
				<div class="clear"></div>
			</div><!--container-->
		</section>
		
		<section class="sessao1">
			<div class="container">
				<div class="part1"><h2>Valores entregues a você:</h2></div>
				<div class="part2">
					<div class="div_beneficio">
						<div class="img_beneficio"><img src="imagens/icons/proficionalismo.png"></div>
						<div class="text_beneficio">
							<h2>Profissionalismo</h2>
							<p>
								Equipe com o foco em entregar projetos de prevenção de incêndio executados com responsabilidade.
							</p>
						</div>
					</div>
					<div class="div_beneficio">
						<div class="img_beneficio"><img src="imagens/icons/excelencia.png"></div>
						<div class="text_beneficio">
							<h2>Excelência</h2>
							<p>
								Trabalhamos para oferecer serviços e produtos que tornam a sua vida mais segura com responsabilidade.
							</p>
						</div>
					</div>
					<div class="div_beneficio">
						<div class="img_beneficio"><img src="imagens/icons/comprometimento.png"></div>
						<div class="text_beneficio">
							<h2>Comprometimento</h2>
							<p>
								Unimos dedicação e esforço para fortalecer o nosso compromisso em oferecer soluções condizentes com as leis.
							</p>
						</div>
					</div>
					<div class="div_beneficio">
						<div class="img_beneficio"><img src="imagens/icons/qualificacao.png"></div>
						<div class="text_beneficio">
							<h2>Qualificação</h2>
							<p>
								Investimos em novas tecnologias e capacitações para entregarmos seriedade, ética e segurança.
							</p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</section>

		<section class="sessao2">
			<div class="container">
				<div class="part1">
					<h2>Conquistas</h2>
				</div>
				<div class="part2">
					<div>
						<h2>+5.000</h2>
						<span>Empresas atendidas</span>
					</div>
					<div>
						<h2>+30</h2>
						<span>Anos de experiência</span>
					</div>
					<div>
						<h2>+1.500</h2>
						<span>Serviços concluídos</span>
					</div>
					<div>
						<h2>+100</h2>
						<span>Obras executadas</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</section>

		<section class="sessao3">
			<div class="container">
				<h2>Inscreva-se para acessar nosso catálogo</h2>
				<div>
					<form action="index.php" name="form_contato" method="post">
						<input type="text" name="email" placeholder="E-mail*" required>
						<input type="text" name="emailBoot" class="emailBoot">
						<div><input type="submit" name="btnEnviar" value="Acessar"></div>
					</form>
				</div>
			</div>
		</section>

		<footer class="footer">
			<div class="part1">
				<div class="container">
					<div class="col col_2">
						<h2>Serviços</h2>
						<div><a href="servicos.php">Projetos de Prevenção</a></div>
						<div><a href="servicos.php">Recarga e Manutenção de Extintores</a></div>
						<div><a href="servicos.php">Recarga de Cilindros para Chopp</a></div>
						<div><a href="servicos.php">Inspeções técnicas</a></div>
						<div><a href="servicos.php">Instalações Gerais de Prevenção</a></div>
						<div><a href="servicos.php">Locação de Equipamentos</a></div>
						<div><a href="servicos.php">Teste Hidrostático</a></div>
						<div><a href="servicos.php">Curso de Brigada de Incêndio</a></div>
					</div>
					<div class="col col_2">
						<h2>Saiba Mais</h2>
	                	<div><a href="index.php">Home</a></div>
	                    <div><a href="sobre.php">Sobre</a></div>
	                    <div><a href="servicos.php">Serviços</a></div>
	                    <div><a href="contato.php">Contato</a></div>
	                    <div><a href="catalogo.php">Catálogo</a></div>
					</div>
					<div class="col col_2">
						<h2>Endereço</h2>
						<div>Coronel Vivida</div>
						<div>Rua Jairo Giordani, 148</div>
						<div>Bairro Imaribo - Parque Industrial</div>
						<div>85550-000</div>
						<div>extincel@extincel.com.br</div>
						<div>(46) 3232-1058</div>
					</div>
					<div class="col">
						<h2>Redes Sociais</h2>
						<div>
							<a href="https://www.facebook.com/ExtincelExtintores" class="facebook"><i class="fa fa-facebook"></i></a>
			                <a href="https://www.instagram.com/extincel/" class="instagram"><i class="fa fa-instagram"></i></a>
			                <a href="https://api.whatsapp.com/send?phone=554632321058" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="part2">
				<div class="container">
					<div><span>©Copyright - Extincel</span></div>
				</div>
			</div>
		</footer>


        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>