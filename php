CÓDIGO	DO	EX4
<html>
				<head>
								<meta	charset="UTF-8">
								<title>Formulário	De	Compra	</title>	
				</head>
<body>
					<h2>Formulário	De	Compra</h2>
								<form	action="ex.php"	method="post">
										Nome:<input	type="text"	name="nome"	size	="30"	required	/><br/><br/>
										Sobrenome:<input	type="text"	name="sobrenome"	size	="30"	required	
/><br/><br/>
										Endereço:	<input	type="text"	name="endereço"	size	="30"	required/><br/><br/>
										Data	da	compra:<input	type="date"	name="data"	size	="30"	
required/><br/><br/>
										Forma	de	pagaemnto:
												<select	name="pagamento">
																<option	value="">Selecione</option>
																<option	value="Cartão	de	débito">Cartão	de	débito</option>
																<option	value="Cartão	de	crédito">Cartão	de	crédito</option>
																<option	value="Boleto">Boleto</option>
																<option	value="PIX">PIX</option>
												</select>
										<p>
					<input	type="submit"	value="Enviar"	name="enviar"/>
					<input	type="reset"	value="Cancelar"	name="cancelar"/>
									</p>
									
</form>
								</body>
				</html>
EX.PHP
<?php
			$nome=$_POST["nome"];
			$sobrenome=$_POST["sobrenome"];
			$endereço=$_POST["endereço"];
			$data=$_POST["data"];
			$pagamento=$_POST["pagamento"];
			
			echo'Nome:'.$nome.'<br>';
			echo'Sobrenome:'.$sobrenome.'<br>';
			echo'Endereço:'.$endereço.'<br>';
			echo'Data	da	compra:'.$data.'<br>';
			echo'Forma	de	pagamento:'.$pagamento.'<br>';
					
?>
