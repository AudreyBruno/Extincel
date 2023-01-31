<?php
    if (isset($_POST['btnEnviar']) && $_POST['emailBoot'] === '') {
        //Variáveis
        $nome = $_POST['nome'];
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
                                <td width='500'>Nome:$nome</td>
                            </tr>
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
        $assunto = "Contato pelo Site(Catalogo)";

        // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:'.$nome;
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
        <meta name="description" content="">
		<meta name="keywords" content="alarme,incendio,extintores,gás,chopp,iluminação,sinalização,emergência" />
        <meta name="author" content="" />

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/style_menu.css" rel="stylesheet" type="text/css">
        <link href="css/style_home.css" rel="stylesheet" type="text/css">
        <link href="css/style_sobre.css" rel="stylesheet" type="text/css">
        <link href="css/style_catalogo.css" rel="stylesheet" type="text/css">
        <link href="css/style_rodape.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" >

        <link rel="icon" type="image/x-icon" href="imagens/favicon.ico">
	</head>
	<body class="body_catalogo">
		<section class="catalogo_sessao1">
			<div class="container"><a href="index.php"><img src="imagens/logoWhite.png"></a></div>
		</section>

		<section class="catalogo_sessao2">
			<div class="container">
				<div class="part1">
					<h5>Temos um catálogo completo, com todas as linhas de produtos de combate e
					prevenção contra incêndio.</h5>
				</div>
				<div class="part2">
					<form action="catalogo.php" name="form_contato" method="post">
						<h2>Preencha os seus dados para receber o Catálogo de Produtos</h2>
						<div>
		    				<h5>Nome*</h5>
		    				<input type="text" name="nome" placeholder="Nome" required>
	    				</div>
						<div>
	    					<h5>Email*</h5>
	    					<input type="text" name="email" placeholder="Email" required>
							<input type="text" name="emailBoot" class="emailBoot">
	    				</div>

						<div class="catalogo_btn">
							<input class="submit" type="submit" name="btnEnviar" value="Enviar">
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</section>

	</body>
</html>