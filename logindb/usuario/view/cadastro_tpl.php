
<html>
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<br><br> <h1>Crie sua conta</h1><br><br>
		<center>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="cadastro.php">
							<br>
							<?php
							if ( count($erros)>0 ){
								foreach ($erros as $erro){
									echo $erro . '<br>';
								}
							?>
							<br>
							<br>
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome" >
							<br><br>
							<label for="email">Email</label>
							<input type="text" id="email" name="email" >
                            <br>
                            <label for="senha">Senha</label>
							<input type="password" id="senha" name="senha" >
                            <br>
                            <label for="conf_senha">Senha</label>
							<input type="password" id="conf_senha" name="conf_senha" >
							<br>
							<a href="usuario/cadastro.php">Cadastre-se</a>
							<br>
							<input type="submit" name="cadastrar" value="Cadastrar">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>