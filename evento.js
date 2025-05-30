/*Espacio entre texto cuando el usuaurio haga enter*/ 
document.execCommand("defaultParagraphSeparator", false, "p");

/*Eventos de cambio de estilo de texto*/ 
function format (command, value =null){
    document.execCommand(command , false, value);
}

document.getElementById("negrita").addEventListener( "click", () => format("bold"));
document.getElementById("cursiva").addEventListener( "click", () => format("italic"));
document.getElementById("subrayado").addEventListener( "click", () => format("underline"));
/*Listado*/ 
document.getElementById("lista_puntos").addEventListener("click", () => {
  format("insertUnorderedList");
});
/*Alineacion de texto*/ 
document.getElementById("alin_izq").addEventListener( "click", () => format("justifyLeft"));
document.getElementById("alin_cent").addEventListener( "click", () => format("justifyCenter"));
document.getElementById("alin_der").addEventListener( "click", () => format("justifyRight"));
/*Resaltar texto*/ 
document.getElementById("resaltar").addEventListener("change", function () {
  format("hiliteColor", this.value);
});


/*Tipografia*/
document.getElementById("fuentes").addEventListener("change", function () {
  format("fontName", this.value);
});

/*Color tipografia*/
document.getElementById("color_tip").addEventListener("change", function () {
  format("foreColor", this.value);
});

/*Guardar: abrir modal y pasar contenido del editor al campo oculto*/
document.getElementById("btnGuardar").addEventListener("click", function () {
  const editor = document.querySelector(".escritura");
  const contenido = editor.innerHTML;
  document.getElementById("contenidoOculto").value = contenido;
  document.getElementById("modalGuardar").showModal();
});

/*abrir modal ULTIMA NOTICIA*/
document.getElementById("btnVerUltima").addEventListener("click", function () {
  document.getElementById("modalUltimaNoticia").showModal();
});