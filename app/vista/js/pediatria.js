$("#p_pp1").on("click", comprobar);
$("#p_pp2").on("click", comprobar);
$("#p_pp3").on("click", comprobar);
$("#p_pp4").on("click", comprobar);
$("#p_pp5").on("click", comprobar);
$("#p_pp6").on("click", comprobar);

$("#p_au1").on("click", comprobar);
$("#p_au2").on("click", comprobar);
$("#p_au3").on("click", comprobar);
$("#p_au4").on("click", comprobar);
$("#p_au5").on("click", comprobar);
$("#p_au6").on("click", comprobar);
$("#p_au7").on("click", comprobar);
$("#p_au8").on("click", comprobar);
$("#p_au9").on("click", comprobar);

$("#p_pc1").on("click", comprobar);

$("#p_pcom1").on("click", comprobar);
$("#p_pcom2").on("click", comprobar);
$("#p_pcom3").on("click", comprobar);
$("#p_pcom4").on("click", comprobar);
$("#p_pcom5").on("click", comprobar);
$("#p_pcom6").on("click", comprobar);

$("#lexion").on("click", comprobar);

function comprobar(evento){
	evento.preventDefault();
	var elemento = $(this);
	var elementoClass = elemento.attr("id");
	console.log(elementoClass);
	panel(elementoClass);
}

function panel(elementoClass){
	$.ajax({
		type: "GET",
		url: "../app/modelo/pediatriamodulos.php",
		data: {"idp": elementoClass}
	}).done(function (info){
		$(".panel-interactivo").html(info);
	});
}

$(".datos-dropdown").hide();
$(".btn-datos").on("click",function (evento){
	evento.preventDefault();
	var element = $(this);
	var idelement = element.attr("data-target");
	$("."+idelement).toggle();
});