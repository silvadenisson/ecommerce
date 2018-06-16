<html>
<head>
	<title>Controle Remoto - TV Samsung</title>
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
	<!--
		function executar(comando){
			$.post(
				"php/envia_comando.php",
				{c: comando},
				function(data){
					$("#container").fadeOut(100);
					$("#container").html(data);
					$("#container").fadeIn(100);
				}
			);
		}
	//-->
	</script>
</head>
<body>
	<header id="main_header">
		Controle remoto - by Douglas de Menezes
	</header>
	<table id="controle">
		<tr>
			<td></td>
			<td><div id="container"><img src="img/question.png"/></div></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="button" onClick="javascript:executar(10);" class="button_white" value="ON/OFF"/></td>
			<td><input type="button" onClick="javascript:executar(20);" class="button_white" value="CANAL +"/></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="button" onClick="javascript:executar(31);" class="button_white" value="VOL -"/></td>
			<td><input type="button" onClick="javascript:executar(32);" class="button_white" value="MUDO"/></td>
			<td><input type="button" onClick="javascript:executar(30);" class="button_white" value="VOL +"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="button" onClick="javascript:executar(21);" class="button_white" value="CANAL -"/></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="button" onClick="javascript:executar(91);" class="button_white" value="1"/></td>
			<td><input type="button" onClick="javascript:executar(92);" class="button_white" value="2"/></td>
			<td><input type="button" onClick="javascript:executar(93);" class="button_white" value="3"/></td>
		</tr>
		<tr>
			<td><input type="button" onClick="javascript:executar(94);" class="button_white" value="4"/></td>
			<td><input type="button" onClick="javascript:executar(95);" class="button_white" value="5"/></td>
			<td><input type="button" onClick="javascript:executar(96);" class="button_white" value="6"/></td>
		</tr>
		<tr>
			<td><input type="button" onClick="javascript:executar(97);" class="button_white" value="7"/></td>
			<td><input type="button" onClick="javascript:executar(98);" class="button_white" value="8"/></td>
			<td><input type="button" onClick="javascript:executar(99);" class="button_white" value="9"/></td>
		</tr>
		<tr>
			<td><input type="button" onClick="javascript:executar(11);" class="button_white" value="FONTE"/></td>
			<td><input type="button" onClick="javascript:executar(90);" class="button_white" value="0"/></td>
			<td><input type="button" onClick="javascript:executar(12);" class="button_white" value="SAIR"/></td>
		</tr>
	</table>
</body>
</html>