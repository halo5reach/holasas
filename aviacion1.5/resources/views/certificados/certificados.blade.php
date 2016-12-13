<!DOCTYPE html>
<html>
<head>
	<title>Certificado-aviacion</title>
</head>
<style type="text/css">
header{
	text-align: center;
}
footer{
	margin: 100px;
	text-align: center;
}
.bloque{
	font-size: 10px;
}
.tabla{
	border-collapse: collapse;
	width: 100%;
	
}
.td{
	text-align: center;
}
	
</style>
<body>
<?php
$a=$aprendiz->ToArray();

function obtenerFechaEnLetra($fecha){
    //$dia= conocerDiaSemanaFecha($fecha);
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    return $num.' de '.$mes.' del '.$anno;
}
function conocerDiaSemanaFecha($fecha) {
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $dia = $dias[date('w', strtotime($fecha))];
    return $dia;
}?>
	
	<header>
		<strong><p>699-14<p></strong>	
		<strong>
			<p>	EL CENTRO<br>
				CENTRO INDUSTRIAL Y DE AVIACION
			</p>			
			<p>CERTIFICA</p>
		</strong>
	</header>
	<section>
		<p>Que <strong><?php echo strtoupper($a[0]->nombre); ?>,</strong> identificado con la Cédula de Ciudadanía No. <?php echo number_format($a[0]->documento,0,",", ".") ?> Realizó y aprobó el curso de <strong><?php echo strtoupper($a[0]->programa) ?></strong> iniciando su etapa lectiva el <?php echo obtenerFechaEnLetra($a[0]->fecha_inicio) ?> hasta el <?php echo obtenerFechaEnLetra($a[0]->fecha_fin) ?>, con los siguientes contenidos, evaluaciones e intensidad horaria:</p>
	</section>
	
	<section>
		<table border="1px" class="tabla">
			<thead>
			<tr>		
	    			<th class='cols' >BLOQUE MODULAR</th>
	    			<th colspan="2">EVALUACION</th>
	    			<th>LH</th>
	    			</tr>	    						
    		</thead>
    		<tbody> 
    			<?php   	
    			
    			foreach ($aprendiz->all() as $aprendi) {
    			
    				echo "
		    			<tr>
		    				<td>".$aprendi->denominacion."</td>    				
		    				<td class='td'>4.5</td>
		    				<td class='td'>A</td>
		       				<td class='td'>".$aprendi->duracion."</td>
		    			</tr>";
    			}
    			?>				
          	</tbody>
		</table>
	</section>
	<aside>
		<p>
			Equivalencia de Evaluaciones:<br>
			D: Reprobó<br>
			A: Aprobó <br>
		</p>
		<br>
		<br>
		Se expide en Barranquilla a los Veintenueve (29) dias del mes de Agosto de Dos mil Catorce(2014) con destino a la oficina de Licencias de la UAEAC, para tramites de obtencion de licencia TLA.
	</aside>
	<footer>
		<strong>RAFAEL EDUARDO DE LA ROSA MERCADO<br>
				SUBDIRECTOR CENTRO INDUSTRIAL Y DE AVIACION
		</strong>
	</footer>
</body>
</html>