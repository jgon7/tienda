<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="whiteline" content="White Line" />
		<!--
		refresh automatico ->
		<meta http-equiv="refresh" content="3; URL=index.php" />
		-->
		<title>White Line</title>
		<!--
		invoca archivo css -->
		<style>
			* {
			  box-sizing: border-box;
			}

			body {
			  font-family: Arial, Helvetica, sans-serif;
			}

			/* Style the header */
			header {
			  background-color: #666;
			  padding: 30px;
			  text-align: center;
			  font-size: 35px;
			  color: white;
			}

			/* Create two columns/boxes that floats next to each other */
			nav {
			  float: left;
			  width: 300px;
			  height: 100%; /* only for demonstration, should be removed */
			  background: #ccc;
			  padding: 20px;
			  display: table;
			}

			/* Style the list inside the menu */
			nav ul {
			  list-style-type: none;
			  padding: 0;
			}
			
			/* Clear floats after the columns */
			section::after {
			  content: "";
			  display: table;
			  clear: both;
			}

			/* Style the footer */
			footer {
			  background-color: #777;
			  padding: 10px;
			  text-align: center;
			  color: white;
			}

			/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
			@media (max-width: 600px) {
			  nav, article {
				width: 100%;
				height: auto;
			  }
			}
			
			.cArticulos {
				position: relative;
				background-color: #FFAAAA;
				margin: 15px;
				float: left;
				padding: 20px;
				width: 400px;
				height: 250px; /* only for demonstration, should be removed */
			}
			
			ul input{
				border: solid 1px;
				margin:2px;
				text-align:left;
				width:300px;
			}
			
			.cLogueo{
				font-family:arial;
				font-size:14pt;
				color:#FFFFFF;
				text-align:right;
			}
		</style>
		<!-- invoca script -->
		
	</head>
	<body style="background-color: #000000;">


		<header>
			<h2>LOGO</h2>
			<div>
				<div style="display: table; width:100%; height:30px; background:#4444FF; padding: 10px;">
					<input id="btn1" type="button" value="INICIO" onmouseover="MenuOver(true,this);" onmouseout="MenuOver(false,this);" onclick="CambiarPagina('index.php');" />
					<input id="btn2" type="button" value="OFERTAS" onmouseover="MenuOver(true,this);" onmouseout="MenuOver(false,this);" onclick="CambiarPagina('productos.php');" />
					<input id="btn3" type="button" value="PRODUCTOS" onmouseover="MenuOver(true,this);" onmouseout="MenuOver(false,this);" onclick="CambiarPagina('marcas.php');" />
					<!--<input id="btn5" type="button" />-->
				</div>
			</div>
		</header>

		<section>
			<div style="display:table; background-color:#333333; width: 100%; height:100%; padding: 20px;">
				<fieldset style="border:solid 1px #AA2222; height: auto; width: 100%;">
					<legend style="color:#CC5522; font-family:arial; font-size:14pt;">
						Ingresar sus datos para el registro:
					</legend>				
					<form id="frm" style="margin-top:20px;" action="php/newuser.php" method="POST">
						<table>
							<tr>
								<td class="cLogueo">Documento:</td>
								<td><input type="text" id="inpUser" class="cTextBox" name="txtUser" maxlength="30" /></td>
							</tr>
							
							<tr>
								<td class="cLogueo">Contrase�a:</td>
								<td><input type="password" id="inpPass" class="cTextBox" name="txtPass" maxlength="20" /></td>
							</tr>
							<tr>
								<td class="cLogueo">Nombre:</td>
								<td><input type="text" id="inpNom" class="cTextBox" name="txtNom" maxlength="30" /></td>
							</tr>
							<tr>
								<td class="cLogueo">Apellido:</td>
								<td><input type="text" id="inpApe" class="cTextBox" name="txtApe" maxlength="30" /></td>
							</tr>
							<tr>
								<td class="cLogueo">Direcci�n:</td>
								<td><input type="text" id="inpTel" class="cTextBox" name="txtTel" maxlength="20" /></td>
							</tr>
							<tr>
								<td class="cLogueo">E-Mail:</td>
								<td><input type="text" id="inpMail" class="cTextBox" name="txtMail" maxlength="40" /></td>
							</tr>
						</table>
					</form>
					<br/>
				</fieldset>
				<br/>
				<input type="button" id="btnAceptar" style="margin-left:8px;" value="Registrar" onclick="RegUser();" />
				<span> </span>
				<input type="button" id="btnCancelar" value="Cancelar" onclick="CambiarPagina('logueo.php');" />
			</div>

			
		</section>
		<footer>
		  <p>Footer</p>
		</footer>
	</body>
</html>