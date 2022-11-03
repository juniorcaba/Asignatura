<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "listaasignaturas";

// Estableciendo la Conexion
$conexion = mysqli_connect($servername, $username, $password, $database);

// Confirmando la Conexion
if (!$conexion) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>




<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8" />
	<title>Lista</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/EstiloAsig.css">	
<!-- 	<link rel="stylesheet" href="EDITABLE.CSS">	 -->
	<meta name="responsive" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="edit-table.css">
    <script defer src="edit-table.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script>
		'use strict';

			//Declaracion de la variable 
			var app = angular.module('TablaEditable', []);
			
			//Funcion principal para crear por defecto valores en la tabla.
			app.controller('TablaCtrl', ['$scope', function($scope) {
			  $scope.lista = [{
				Codigo:'INF-510',
				Catedra:'Programacion',
				Asignatura:'Introduccion a la Programacion',
				HT:'4',
				HP:'0',
				CR:'4'
				
			  }, 
			  {
				Codigo:'INF-510',
				Catedra:'Programacion',
				Asignatura:'Introduccion a la Programacion',
				HT:'4',
				HP:'0',
				CR:'4'
			  }];
			  
			  //Funcion para Eliminar Filas	y confirma con un ventana emergente.
			  $scope.eliminar = function(row) {
				if (confirm("¿Seguro que desea eliminar?")) {
				  $scope.lista.splice(row, 1);
				}
			  };
			  
			  //Funcion para Agregar filas agregando vamores por defecto como muestra.
			  $scope.agregar = function() {
				$scope.lista.push({
				Codigo:'INF-000',
				Catedra:'CATEDRA',
				Asignatura:'ASIGNATURA',
				HT:'9',
				HP:'9',
				CR:'9'
				})
			  };
				// Funciona para recuperar valores 
				//Estamos trabajando con esto aun no nos funciona perdonen. :)
				
			  //$scope.recuperarValores = function() {
				//console.log($scope.lista);
				//$("#JSON").text(JSON.stringify($scope.lista));
			  //};
			  
			}]);
			
			//Funciona para editar las tuplas, filas o row de la tablas.
			app.directive('editableTd', [function() {
			  return {
				restrict: 'A',
				link: function(scope, element, attrs) {
				  element.css("cursor", "pointer");
				  element.attr('contenteditable', 'true');

				  //element.bind('blur keyup change', function() {
				  //	scope.lista[attrs.row][attrs.field] = element.text();
				 // });

				  //element.bind('click', function() {
				  //document.execCommand('selectAll', false, null)
				  // });
				}
			  };
			}]);
	</script>
	<title>mostrar datos</title>
</head>

<body>
	<header>
		<div class="header-top">
				<a href="index.html">
				<img src="img/gestion_academica.svg" alt="Gestión Acádemica">
			
				<a href="https://www.uasd.edu.do/">
				<img src="img/logo_uasd.svg" alt="Universidad Autónoma de Santo  Domingo">
			</a>
		   
		</div>
		<span class="header-bottom"></span>
    </header> 
	
	<section class="content2" >
		<div ng-cloak ng-app="TablaEditable">  
			<div class="container" ng-controller="TablaCtrl">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered editable" id="dataTable" width="100%" cellspacing="0" border="2" >
							<thead>
								<tr>
									<th>Codigo</th>
									<th>Catedra</th>
									<th>Asignatura</th>
									<th>HT</th>
									<th>HP</th>
									<th>CR</th>
									<!-- <th>Check</th> -->
								</tr>
							</thead>
							
							<?php 
							$sql="SELECT * FROM asignatura";
							$result=mysqli_query($conexion,$sql);

							while($mostrar=mysqli_fetch_array($result)){
							 ?>
							<tbody>
								<tr>
									<td><?php echo $mostrar['Codigo'] ?></td>
									<td><?php echo $mostrar['Catedra'] ?></td>
									<td><?php echo $mostrar['Asignatura'] ?></td>
									<td><?php echo $mostrar['HT'] ?></td>
									<td><?php echo $mostrar['HP'] ?></td>
									<td><?php echo $mostrar['CR'] ?></td>
								</tr>
							</tbody>
						<?php 
							}
						 ?>
						</table>
					</div>
				</div>	
			</div>
		</div>
	</section>
</body>
</html>