<?php 

	$conexion=mysqli_connect('localhost','root','', 'listaasignaturas');
	
	

 ?>
 
<!DOCTYPE html> 
<html lang="es"> 
<head>
	<meta charset="utf-8" />
	<title>Lista</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/EstiloAsig.css">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">	
	<meta name="responsive" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico"/>
	
</head>
  <body>
    <header>
      <div class="header-top">
			<a href="index.html">
			<img src="img/gestion_academica.svg" alt="Gestión Acádemica">
		
			<a href="https://www.uasd.edu.do/">
            <img src="img/logo_uasd.svg" alt="Universidad Autónoma de Santo Domingo">
        </a>
       
      </div>
      <span class="header-bottom"></span>
    </header> 
    <section>
			<div class="block blockLista">
			<ul class="link-list">
				 <li class="link-item2">
				  <a href="subasignaturas.html">
					<img class="link-icon" src="img/asignaturas.svg">
					<span class="caption">Crear_Asignatura</span>
				  </a>
				</li>
				<li class="link-item2">
				  <a href="asignaturas.html">
					<img class="link-icon" src="img/asignaturas.svg">
					<span class="caption">Asignaturas</span>
				  </a>
				</li>
				<li class="link-item2">
				  <a href="sublista.html">
					<img class="link-icon" src="img/lista.svg">
					<span class="caption">Lista</span>
				  </a>
				</li>
			</ul>
		</div>
		
		<div>
			<h1 class="titulo"><br>Lista<br><br><h1>
		</div>
			
    </section>
	
	<section class="content2">
	 
	<div>

	<table border="2" >
		<tr>
			<th>Codigo</th>
            <th>Catedra</th>
            <th>Asignatura</th>
            <th>HT</th>
            <th>HP</th>
			<th>CR</th>
			<th>Check</th>
		</tr>

		<?php 
		$sql="SELECT * FROM asignatura";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Codigo'] ?></td>
			<td><?php echo $mostrar['Catedra'] ?></td>
			<td><?php echo $mostrar['Asignatura'] ?></td>
			<td><?php echo $mostrar['HT'] ?></td>
			<td><?php echo $mostrar['HP'] ?></td>
			<td><?php echo $mostrar['CR'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</div>
	</section>
    <footer></footer>
  </body>
</html>