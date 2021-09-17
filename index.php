<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SendWord</title>
	<link rel="stylesheet" href="css/estiloIA.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
</head>
<body>
	<header>
		<div class="divTituloProyecto"><img src="img/Sin título-1 1.png" alt=""></div>
		<div class="divMenus">
			<div class="divItem"><a href="#divTituloInstructivo" class="item1">Indicaciones</a></div>
			<div class="divItem"><a href="#articleOperacionImagen" class="item2">Fotografia</a></div>
			<div class="divItem"><a href="#" class="item3">Libreria</a></div>
			<div class="divItem"><a href="#sectionDesarrolladores" class="item4">Contactos</a></div>
		</div>
		<div class="divSeparacionLogo">
		</div>
	</header>
	<main>
		<article>
			<section class="sectionInformacionSendword">
					<div class="divParrafoInformacion">
						<div class="divTituloInformacion">
					<p>¡Convierte tu <b class="palabraImagen">imagen</b> en <b class="palabraTexto">texto</b>!</p></div>
						<p>Bienvenido a <b>SENDWORD, </b>herramienta web que te permitira extraer textos de cualquier imagen a fotografia a un editor de texto digital.</p>
					</div>
					<div class="divImagen"><img src="img/Imagen1.png" alt=""></div>
				</section>
		</article>
		<article>
			<div class="divTituloInstructivo" id="divTituloInstructivo">
				<h1>INSTRUCTIVO</h1>
			</div>
			<div class="divContenidoInstructivo">
				<div class="divInstructivo">
					<h1>1</h1>
					<div class="parrafoInstructivo"><p>Da un toque eb la opción "Importar archivo o "Tomar foto" según tu necesidad</p></div>
				</div>
				<div class="divInstructivo">
					<h1>2</h1>
					<div class="parrafoInstructivo"><p>Escoge la Imagen o toma la foto de lo que deseas rastrear</p></div>
				</div>
				<div class="divInstructivo">
					<h1>3</h1>
					<div class="parrafoInstructivo"><p>Luego de estar subido el elemento da un toque en el boton de "Rastrear"</p></div>
				</div>
				<div class="divInstructivo">
					<h1>4</h1>
					<div class="parrafoInstructivo"><p>Si se realizo el rastreo de manera correcta te generara tu texto</p></div>
				</div>
			</div>
		</article>


		<!----------------------------------------------------------------------
		 	ESTRUCTURA PERTINENTE PARA EL PROCESO DE INTELIGENCIA ARTIFICIAL
		--------------------------------------------------------------------!-->
		<article class="articleOperacionImagen" id="articleOperacionImagen">
			<div class="contenedorOperacionImagen"><!--Inicio del contenedor que agrupa Importar y tomar una imagen!-->
				<section class="sectionImportar"><!--Inicio del contenedor que agrupa solo el Importar imagen!-->
					<div>
						<p>Importar</p>
					</div>
					<div>
						<input type="file" id="inputImgImportar"  accept="image/*"><!--Input que me trae la imagen del directorio!-->
					</div>
					<div class="contenedorBotonVisualizar">
						<input type="button" id="botonVisualizarImgImportada" value="Visualizar" disabled><!--Input tipo boton con el cual envio la imagen seleccionada del directorio para guardarla en mi carpeta interna del proyecto y posteriormente mostrarla en la pagina web!-->
					</div>
				</section><!--Fin del contenedor que agrupa solo el Importar imagen!-->

				<section class="sectionFotografiar"><!--Inicio del contenedor que agrupa solo el Tomar imagen!-->
					<div>
						<p>Fotografiar</p>
					</div>
					<div>
						<input type="button" value="Activar Camara" id="inputImgFotografiar"><!--Input qu me activara el contenedor de mostrar camara!-->
					</div>
				</section><!--Fin del contenedor que agrupa solo el Tomar una imagen!-->
			</div>

				<section class="visualizacionImagen"><!--Inicio del contenedor que mostrara la imagen ya sea importada o tomada por medio de la camara!-->
					<div class="divImagenVisualizada">
						<img src="" alt="" id="imgVisualizada"><!--img que tendra la ruta de la imagen dispuesta por el usuario!-->
					</div>
					<div class="divBotonOperacionExtraer">
						<input type="button" value="Extraer Texto" id="botonExtraerTexto"><!--input que enviara la ruta de la imagen guardada en mi carpeta interna para realizar el proceso de extraccion de texto!-->
					</div>
				</section><!--Fin del contenedor que mostrara la imagen ya sea importada o tomada por medio de la camara!-->
				<section class="visualizacionCamara">
					<div class="divPantallaCamara">
							<video src="" id="videoCamara"></video>
							<div class="menuOpcionCapturaImagen"><div class="opcionCaptura"><a href="#"></a></div></div>
							<div class="contenedorBotonVisualizar">
								<input type="button" id="botonVisualizarImgFotografiada" value="Visualizar" disabled><!--Input que me 	guardara la imagen tomada desde la camara en mi carpeta interna y luego la mostrara en la pagina web!-->
							</div>
					</div>
				</section>
		</article>
		<article class="articleResultado">
			<div class="divResultadoTexto"><p>¡Tu resultado aparecera en este sector!</p></div>
			<div>
				<input type="button" value="Copiar Texto">
				<input type="button" value="Descargar Texto">
			</div>
		</article>
		<article>
				<section class="sectionDesarrolladores" id="sectionDesarrolladores">
					<div class="divGrupoDesarrollador">
						<div class="divDesarrollador">
							<div class="divImagenDesarrollador"><img src="img/desarrollador1.png" alt=""></div>
							<div class="divNombreDesarrollador"><p>Neider Urbano</p><p>Ingeniero de Sistemas</p><p>Desarrollador Web</p><p>julianur012b@gmail.com</p></div>
						</div>
						<div class="divDesarrollador">
							<div class="divImagenDesarrollador"><img src="img/desarrollador2.png" alt=""></div>
							<div class="divNombreDesarrollador"><p>Brayan Porras</p><p>Ingeniero de Sistemas</p><p>Desarrollador Web</p><p>brianporrasleal@gmail.com</p></div>
						</div>
						<div class="divDesarrollador">
							<div class="divImagenDesarrollador"><img src="img/desarrollador3.png" alt=""></div>
							<div class="divNombreDesarrollador"><p>Yorch 	Moreno</p><p>Desarrollador Gráfico Web</p><p>maicol_moreno_18@outlook.com</p></div>
						</div>
					</div>
				</section>
			</article>
	</main>
		<script type="text/javascript" src="js/permitirCamara.js"></script>
		<script type="text/javascript">
			$(document).ready(function(event){
				$('.visualizacionCamara').hide();
				$('.visualizacionImagen').hide();/*el contenedor donde se vissualiza la imagen la inicializamos oculta*/

				/*CODIGO JS ESPECIAL PARA EL GUARDADO DE IMAGEN Y LA OBTENCION DE LA RUTA DE ESTA EN LA CARPETA INTERNA DEL PROYECTO*/
				var formData = new FormData();/*Variable que me guardara la informacion de mi imagen para que pueda ser tratada en php*/
				$('#inputImgImportar').click(function(event) {/*Funcionalidad al dar click al boton de importar imagen*/
					$('.visualizacionCamara').hide();
					deshabilitar('#botonVisualizarImgFotografiada');/*Se deshabilita el boton de tomar una foto*/
					habilitar('#botonVisualizarImgImportada');/*Se deshabilita el boton de visualizar la imagen seleccionada*/
				});
				$('#inputImgFotografiar').click(function(event) {/*Funcionalidad al dar click al boton de tomar una imagen*/
					$('.visualizacionImagen').hide();
					$('.visualizacionCamara').show();	
					document.querySelector('#inputImgImportar').value="";
					habilitar('#botonVisualizarImgFotografiada');
					deshabilitar('#botonVisualizarImgImportada');
				});

				$('#botonVisualizarImgImportada').click(function(event) {
					event.preventDefault();
					if(document.getElementById("inputImgImportar").files.length != 0){ /*Se guardara una imagen solo si el usuario a seleccionado una*/
						const archivoImgImportada = document.getElementById("inputImgImportar").files[0];/*variable que guarda toda la informacion de mi archivo de imagen*/
						formData.append("archivoImg",archivoImgImportada);/*Se asigna una nombre de referencia a toda la informacion de la imagen para que sea tratada en php para su posterior guardado en la carpeta interna del proyecto*/
						fetch("php/guardarImagen.php", {/*codigo para enviar los datos de la imagen a php*/
    					method: 'POST',
    					body: formData,
    						})
    						.then(respuesta => respuesta.text())
    						.then(decodificado =>{
            					alert(decodificado);/*Imprimimos la ruta de la imagen guardada en la carpeta interna*/
									$('.visualizacionImagen').show();/*Damos el permiso para que se muestre el contenedor donde se visualizara la imagen guardada en la carpeta interna del proyecto*/
									document.getElementById("imgVisualizada").src='img/imagenesUsuarios/importadas/'+decodificado;/*le pasamos a la etiqueta Img la ruta de la imagen guardada en nuestra carpeta interna para que el usuario pueda ver su imagen seleccionada*/
    					});
					}else{
						alert("Debes seleccionar una imagen");
					}
				});
				
			function deshabilitar(identidadElemento){
				document.querySelector(''+identidadElemento+'').disabled=true;
			}
			function habilitar(identidadElemento){
				document.querySelector(''+identidadElemento+'').disabled=false;
			}
			});
		</script>
	</body>
	</html>