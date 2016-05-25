$("#tpp1").on("click", comprobar);
$("#tpp2").on("click", comprobar);
$("#tpp3").on("click", comprobar);
$("#tpp4").on("click", comprobar);
$("#tpp5").on("click", comprobar);
$("#tpp6").on("click", comprobar);
$("#tpp7").on("click", comprobar);
$("#tpp8").on("click", comprobar);
$("#tpp9").on("click", comprobar);
$("#tpp10").on("click", comprobar);

$("#tau1").on("click", comprobar);
$("#tau2").on("click", comprobar);
$("#tau3").on("click", comprobar);
$("#tau4").on("click", comprobar);
$("#tau5").on("click", comprobar);
$("#tau6").on("click", comprobar);
$("#tau7").on("click", comprobar);

$("#tpc1").on("click", comprobar);
$("#tpc2").on("click", comprobar);
$("#tpc3").on("click", comprobar);

$("#tpcom1").on("click", comprobar);
$("#tpcom2").on("click", comprobar);
$("#tpcom3").on("click", comprobar);
$("#tpcom4").on("click", comprobar);

$("#tlexicon").on("click", comprobar);

function comprobar(evento){
	evento.preventDefault();
	var elemento = $(this);
	var elementoClass = elemento.attr("id");
	panel(elementoClass);
}

function panel(elementoClass){
	$.ajax({
		type: "GET",
		url: "../app/modelo/traumamodulos.php",
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