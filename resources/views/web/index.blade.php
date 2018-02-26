@extends('layout.home')

@section('content')
	<style>
	.Rotate-90
	{
	  -webkit-transform: rotate(-90deg);
	  -moz-transform: rotate(-90deg);
	  -ms-transform: rotate(-90deg);
	  -o-transform: rotate(-90deg);
	  transform: rotate(-90deg);
	 
	  -webkit-transform-origin: 50% 50%;
	  -moz-transform-origin: 50% 50%;
	  -ms-transform-origin: 50% 50%;
	  -o-transform-origin: 50% 50%;
	  transform-origin: 50% 50%;
	 
	  font-size: 15px;
	  width: 100px;
	  position: relative;
	  top: 50px;
	}
	</style>
	<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">ADEPI</span>
			<span class="site-desc">APLICACION DE DESEMPEÑO DE PROYECTOS INTEGRADORES</span>
		</a> <!-- / #logo-header -->
 
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Acerca de</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav><!-- / nav -->
 
	</header><!-- / #main-header -->
	<br><br>

	<a class="boton" href"#"  target="_blank">Revisi&oacute;n </a>
	<a class="boton1" href"#"  target="_blank">Evaluaci&oacute;n </a>
	<a class="boton2" href"#"  target="_blank">Agregar Fila </a>
	<a class="boton3" href"#"  target="_blank">Editar</a>
	<!--<a class="boto4" href"#"  target="_blank">Guardar </a>
	<a class="boton5" href"#"  target="_blank">Listo </a>-->
	<br><br>
	<center>
		<table border="1" class="table">
			<tr>
				<td width="10px"><p align="center"><strong>CRITERIOS</strong></p></td>
				<td width="10px"></td>
				<td><p align="center"><strong>Nivel 3 (3 puntos)</strong></p></td>
				<td><p align="center"><strong>Nivel 2 (2 puntos)</strong></p></td>
				<td><p align="center"><strong>Nivel 1 (1 punto)</strong></p></td>
				<td><p align="center"><strong>PUNTUACÍON </strong></p></td>
			</tr>
			<tr>
				<td width="10px"><div class="Rotate-90"><strong>CONTENIDO </strong></div></td>
				<td width="10px"><div class="Rotate-90">Apartados y estructura</div></td>
				<td width="200px"><p align="justify">Contiene todos los apartados solicitados, en el    orden adecuado y con información relevante y oportuna que soporta    adecuadamente la exposición. Los apartados tienen una secuencia lógica y    existe.
				<td width="200px"><p align="justify">Contiene la mayoría de los apartados solicitados,    aunque el orden podría ser mejorado, falta alguna información relevante. Los    apartados tienen en general una secuencia lógica y existe interrelación entre    la mayoría de las partes del proyecto.</p></td>
				<td width="200px"><p align="justify">Hay elementos clave del proyecto que fueron    omitidos.  La estructura no es adecuada    y la información presentada tiene notables carencias. </p></td>
				<td width="100px"><p align="justify">&nbsp;</p></td>
			</tr>
			<tr>
                <td width="10px" rowspan="4"><div class="Rotate-90"><strong>DOMINIO DEL TEMA</strong></div></td>
                <td width="10px"><div class="Rotate-90">Conocimiento del tema</div></td>
                <td width="200px"><br><br><p align="justify">Demuestra amplio dominio de la temática del proyecto, se aprecia un manejo fluido de las fuentes.</p></td>
                <td width="200px"><br><br><p align="justify">Demuestra conocimientos generales de la temática y con algunas dificultades para aportar información adicional. </p></td>
                <td width="200px"><br><br><p align="justify">No demuestra conocimiento sobre la temática y no se aprecia claridad y precisión en los contenidos que presentan. </p></td>
                <td width="100px" height="200px"><p align="justify">&nbsp;</p></td>
            </tr>
            <tr>
            	<td width="10px"><div class="Rotate-90">Explicacion</div></td>
            	<td width="200px"><br><br><p align="justify">Explican claramente todas y cada una de las partes del proyecto.</p></td>
            	<td width="200px"><br><br><p align="justify">Explican claramente la mayoría de las partes del proyecto</p></td>
            	<td width="200px"><br><br><p align="justify">Explican claramente algunas partes del proyecto, pero quedan dudas significativas.</p></td>
            	<td width="100px" height="200px"><p align="justify">&nbsp;</p></td>            	
            </tr>
            <tr>
            	<td width="10px"><div class="Rotate-90">Uso del lenguaje y actitud en la presentación</div></td>
            	<td width="200px"><br><br><p align="justify">El lenguaje es claro y fluido, les permite captar la atención del auditorio, demuestra convicción y entusiasmo hacia el proyecto. Muestran interés en las participaciones de la audiencia, tomando nota puntual de los comentarios para su posterior análisis. Todos los integrantes del equipo inter vienen para hacer aclaraciones.</p></td>
            	<td width="200px"><br><br><p align="justify">El lenguaje en la mayoría de las ocasiones es claro y fluido. Hay algunas distracciones menores entre la audiencia, no muestran los integrantes del equipo evidencia de entusiasmo y compromiso con el tema. Se muestran medianamente interesados en las aportaciones de sus compañeros y docente. Intervienen únicamente dos personas en la sección de preguntas y comentarios.</p></td>
            	<td width="200px"><br><br><p align="justify">El lenguaje no es claro y fluido. Cada integrante del equipo “dice su parte” y se desentiende del resto de la presentación. No se interesan por las sugerencias, comentarios y críticas que reciben. Solamente una persona del equipo interviene en la última parte.</p></td>
            	<td width="100px" height="200px"><p align="justify">&nbsp;</p></td>   
            </tr>
            <tr>
				<td width="10px"><div class="Rotate-90">Organización de la exposición y manejo del tiempo.</div></td>
            	<td width="200px"><br><br><p align="justify">Hay un buen manejo del tiempo, con adecuada distribución entre los integrantes del equipo, y equilibrada participación en todas las partes del proceso. Se nota que todos han participado activamente en el desarrollo del proyecto.</p></td>
            	<td width="200px"><br><br><p align="justify">Hay un buen manejo del tiempo, pero con inadecuada distribución entre los integrantes del equipo, se aprecia un equilibrio a favor de uno o dos de ellos. Hay un manejo más o menos equilibrado de los integrantes, aunque queda claro quién lleva el liderazgo en el planteo del proyecto. </p></td>
            	<td width="200px"><br><br><p align="justify">Desorden en la organización del equipo e inadecuado manejo de los tiempos. Mucho tiempo invertido en secciones poco relevantes.  Se aprecia que el trabajo lo hubiera realizado básicamente una persona del equipo.</p></td>
            	<td width="100px" height="200px"><p align="justify">&nbsp;</p></td>  
            </tr>
            <tr>
                <td width="10px" rowspan="4"><div class="Rotate-90"><strong>MATERIAL</strong></div></td>
                <td width="10px"><div class="Rotate-90">Calidad de las diapositivas u otro material de apoyo.</div></td>
                <td width="200px"><br><br><p align="justify">Utiliza no más de 6   líneas por diapositiva, la tipografía es adecuada. Emplea colores e imágenes de acuerdo al contexto, con el texto necesario. Si usan otro material, éste es pertinente y adecuado al contenido a presentar.</p></td>
                <td width="200px"><br><br><p align="justify">Diapositivas saturadas de información y datos, o bien, se desaprovecha el potencial del material con información escueta. Si usan otro material, éste no es el más adecuado o pertinente al tema.</p></td>
                <td width="200px"><br><br><p align="justify">No utilizan material de apoyo o presentan material incompleto o desorganizado.</p></td>
                <td width="100px" height="200px"><p align="justify">&nbsp;</p></td>
            </tr>
            <tr>
            	<td width="10px"><div class="Rotate-90">Ortografía y uso del lenguaje, norma APA en la citación</div></td>
            	<td width="200px"><br><br><p align="justify">El material tiene 0 errores, uso escrupuloso de la norma APA.</p></td>
            	<td width="200px"><br><br><p align="justify">El material presenta 2-3 errores ortográficos o de puntuación, omisión de algunos aspectos de citación. </p></td>
            	<td width="200px"><br><br><p align="justify">El material no contiene la ortografía adecuada y citación adecuadas.</p></td>
            	<td width="100px" height="200px"><p align="justify">&nbsp;</p></td>            	
            </tr>
		</table>
	</center>

	<footer id="main-footer">
		<p>&copy; 2018 ADEPI</p>
	</footer> <!-- / #main-footer -->
 

	<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
	<script src="{{asset('js/vendor/bootstrap.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

@endsection