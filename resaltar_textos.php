<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="contenido">

            <h2>IFTS N°4</h2>
            <br>
            <h3>Dejenos tu noticia</h3>
            <br>
            <div class="botones">
                <!-- NEGRITA-->
                <button id="negrita">
                    <img src="Iconos/negrita.png" alt="Negrita" width="20" />
                </button>
                <!--CURSIVA -->
                <button  id="cursiva">
                    <img src="Iconos/italico.png" alt="Cursiva" width="20" />
                </button>
                <!--SUBRAYADA -->
                <button  id="subrayado">
                    <img src="Iconos/subrayar.png" alt="Subrayado" width="20" />
                </button>
                <!--LISTA PUNTEADA -->
                <button  id="lista_puntos" contenteditable="true">
                    <img src="Iconos/lista_puntos.png" alt="Lista Punteada" width="20" />
                </button>
                <!--ALINEACION IZQ -->
                <button  id="alin_izq">
                    <img src="Iconos/alineacion_izq.png" alt="Alineacion Izquierda" width="20" />
                </button>
                <!--ALINEACION CENTRO -->            
                <button  id="alin_cent">
                    <img src="Iconos/aliniacion_centro.png" alt="Alineacion Centrada" width="20" />
                </button>
                <!--ALINEACION DERECHA -->    
                <button id="alin_der">
                    <img src="Iconos/aliniacion_derecha.png" alt="Alineacion Derecha" width="20" />
                </button>
                <!--RESALTAR --> 
                <label for="resaltar">Resaltar</label>   
                <input type="color" name="resaltar" id="resaltar" title="Resaltar">
                <!--SELECTOR DE TIPOGRAFIA --> 
                <select name="" id="fuentes">
                    <option value="">Fuentes</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Arial">Arial</option>
                    <option value="Courier New">Courier New</option>
                </select>
                <!--COLOR TIPOGRAFIA--> 
                <label for="color_tip">Color Fuente</label>
                <input type="color" name="color_tip" id="color_tip" title="Color Tipografia">
            </div>
            <br>
            <div class="escritura" name="escritura" id="escritura" contenteditable="true">
                <p>---Dejanos tu noticia---</p>
            </div>
            <br>
            <div>
                <input class="boton_enviar" type="button" value="Enviar" name="boton">
            </div>
    </div>
    <script src="evento.js"></script>
</body>
</html>
