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
                <button id="btnGuardar" class="boton_enviar">Guardar</button>
                <button id="btnVerUltima" class="boton_enviar">Ver última noticia guardada</button>
            </div>
    </div>
    <script src="evento.js"></script>
    <!--MODAL CARGA DATOS FALTANTES --> 
    <dialog id="modalGuardar" style="border:none; border-radius:20px; padding:20px; width:500px;">
        <form method="post" id="formGuardar" action="guardar_noticia.php">
            <h3 style="font-family: 'LexendMega-Regular'; margin-bottom: 10px;">Completar datos de la noticia</h3>

            <label>Carrera:</label><br>
            <input type="text" name="carrera" required style="width:100%;"><br><br>

            <label>Título:</label><br>
            <input type="text" name="titulo" required style="width:100%;"><br><br>

            <label>Resumen:</label><br>
            <textarea name="resumen" required style="width:100%; height:60px;"></textarea><br><br>

            <label>Categoría:</label><br>
            <select name="categoria_id" required style="width:100%;">
                <?php
                // Conexión y carga dinámica de categorías
                try {
                    $conexion = new PDO("mysql:host=localhost;port=3307;dbname=base_datos_ifts;charset=utf8", "root", "");
                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conexion->query("SELECT id, nombre FROM categorias ORDER BY nombre ASC");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='{$row['id']}'>" . htmlspecialchars($row['nombre']) . "</option>";
                    }
                } catch (PDOException $e) {
                    echo "<option disabled>Error al cargar categorías</option>";
                }
                ?>
            </select><br><br>

            <input type="hidden" name="contenido" id="contenidoOculto">

            <div style="display:flex; justify-content:space-between; margin-top: 10px;">
                <button type="button" onclick="document.getElementById('modalGuardar').close()" style="padding: 5px 15px;">Cancelar</button>
                <button type="submit" style="padding: 5px 15px;">Guardar</button>
            </div>
        </form>
    </dialog>

    <!--MODAL VER ULTIMA NOTICIA -->
    <dialog id="modalUltimaNoticia" style="border:none; border-radius:20px; padding:20px; width:500px;">
        <h3 style="font-family: 'LexendMega-Regular'; margin-bottom: 10px;">Última noticia guardada</h3>

        <?php
        try {
            $conexion = new PDO("mysql:host=localhost;port=3307;dbname=base_datos_ifts;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conexion->query("SELECT * FROM noticias ORDER BY id DESC LIMIT 1");
            $noticia = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($noticia) {
                echo "<p><strong>Carrera:</strong> " . htmlspecialchars($noticia['carrera']) . "</p>";
                echo "<p><strong>Título:</strong> " . htmlspecialchars($noticia['titulo']) . "</p>";
                echo "<p><strong>Resumen:</strong> " . htmlspecialchars($noticia['resumen']) . "</p>";
                echo "<p><strong>Contenido:</strong></p>";
                echo "<div style='border:1px solid #ccc; padding:10px; margin-top:5px; max-height:200px; overflow:auto; background:#f9f9f9'>" . $noticia['contenido'] . "</div>";
            } else {
                echo "<p>No hay noticias registradas.</p>";
            }
        } catch (PDOException $e) {
            echo "<p>Error al consultar la base de datos: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
        ?>

        <div style="text-align:right; margin-top:15px;">
            <button onclick="document.getElementById('modalUltimaNoticia').close()">Cerrar</button>
        </div>
        </dialog>
</body>
</html>
