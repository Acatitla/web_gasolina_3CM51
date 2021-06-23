<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Programacion web </title>
	</head> 

				<body>
				<div class="container">
				<div class="row align-items-center">
					<div class="col-12 align-self-center text-center p-4">
					<h1>Gasolina</h1>
					<h2>Equipo</h2>
					<h3>Acatitla González José Ángel</h3>
					<h3>Cuellar Avila Arely</h3>
					<h3>Santamaria Casas Nahomi Abigail</h3>
					<h3>3CM51 Programación Web </h3>
			
					<label for="opciones"> Selecciona el proceso a realizar: </label>
					<select id="opciones">
						<option value="A"> Clientes </option>
						<option value="B"> Pedidos </option>
						<option value="C"> Entregas </option>
						<option value="D"> Ventas/dia </option>
						<option value="E"> Recibo </option>
					</select><br><br>
					
				<script type = "text/javascript">

				const seleccionar = document.querySelector('select');
				const parrafo = document.querySelector('p');
				const div = document.querySelector('.info');

				seleccionar.onchange = establecerClima;

				function establecerClima() {
				const eleccion = seleccionar.value;

				if (eleccion === 'A') {
					parrafo.textContent = 'Porfavor, ingrese el numero de cliente.';
					div.innerHTML = '<form action="clientes.php" method="get"><fieldset><p><label> Numero de cliente:<input type="number" name="cliente" /></label> </p><p><input type="submit" value="enviar"/></p></fieldset></form>';
					div.innerHTML;
				} else if (eleccion === 'B') {
					parrafo.textContent = 'Porfavor, indique cuantos desea realizar.';
					div.innerHTML = '<form action="pedidos.php" method="post"><fieldset><legend> Ingrese datos solicitados</legend><p><label>Cuantos desea realizar:<input type="int" name="totProd" /></label></p><p><input type="submit" value="enviar"/></p></fieldset></form>';
					div.innerHTML;
				} else if (eleccion === 'C') {
					parrafo.textContent = 'Inserte el costo del producto y la utilidad a obtener.';
					div.innerHTML = '<form action="entregas.php" method="post"><fieldset><legend> Ingrese datos solicitados</legend><p><label>Número de Empresa:<input type="int" name="idEmpresa" /></label> </p><p><label>Costo del Embarque: <input type="double" name="costoEmbarque" /></label></p><p><label>Utilidad del producto: <input type="double" name="ganancia" /></label></p><p><input type="submit" value="enviar"/></p></fieldset></form>';
					div.innerHTML;
				}
				else if (eleccion === 'D') {
					parrafo.textContent = 'Inserte el costo del producto y la utilidad a obtener.';
					div.innerHTML = '<form action="venta.php" method="post"><fieldset><legend> Ingrese datos solicitados</legend><p><label>Número de Empresa:<input type="int" name="idEmpresa" /></label> </p><p><label>Costo del Embarque: <input type="double" name="costoEmbarque" /></label></p><p><label>Utilidad del producto: <input type="double" name="ganancia" /></label></p><p><input type="submit" value="enviar"/></p></fieldset></form>';
					div.innerHTML;
				}else if (eleccion === 'E') {
					parrafo.textContent = 'Inserte el costo del producto y la utilidad a obtener.';
					div.innerHTML = '<form action="recibo.php" method="post"><fieldset><legend> Ingrese datos solicitados</legend><p><label>Número de Empresa:<input type="int" name="idEmpresa" /></label> </p><p><label>Costo del Embarque: <input type="double" name="costoEmbarque" /></label></p><p><label>Utilidad del producto: <input type="double" name="ganancia" /></label></p><p><input type="submit" value="enviar"/></p></fieldset></form>';
					div.innerHTML;
				}   
				else {
					parrafo.textContent = 'NO PUSO NADA';
				}
				}

				</script>
			</div>
		</div>	
	</div>
</body>
</html>