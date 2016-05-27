(function (){
	var $user = $("[name='user']")
	var $pass = $("[name='pass']");
	$(".error").hide();

	$("#btn-submit").on("click",verificar);


	function verificar(e){
		e.preventDefault();
		var arreglo = $(".form-control");
		if ($user.val() == "" || $pass.val() == "") {
			$(".error").show();
			$.each(arreglo,function (i,index){
				if(index.value.length==0){
					$(index).css({"border-color":"red","box-shadow": "0px 0px 10px 0.5px red"});
				}
			});
		} else {
			$(".error").hide();
			$user.css({"border-color": "#66afe9", "box-shadow": "0px 0px 10px 0.5px #66afe9"});
			$pass.css({"border-color": "#66afe9", "box-shadow": "0px 0px 10px 0.5px #66afe9"});
			ingresar($user.val(),$pass.val());
		}
	}


	function ingresar(usuario,password){
		$.ajax({
			type: "GET",
			url: "app/modelo/users.php",
			data: {"usuario":usuario,"password":password},
			dataType: "json"
		}).done(function (data){
			//console.log(data.json);
			if (data.validate == "false"){
				$(".modal-content").addClass("shake-vertical shake-constant");
				setTimeout(function (){
					$(".modal-content").removeClass("shake-vertical shake-constant");
					$user.val("");
					$pass.val("");
				},800);
				$(".error").html("<h4>"+data.mensaje+"</h4>").show();
			}else{
				$(".error").hide();
				$user.val("");
				$pass.val("");
				if(data.json.type==1){ // 1 = administrador
					//setTimeout(function (){window.location = "panel";},1500);
				} else if(data.json.type==2){
					if(data.json.area=="trauma"){
						setTimeout(function (){window.location = "traumatologia/pp";},1500);
					} else {
						setTimeout(function (){window.location = "pediatria/pp";},1500);
					}
				}
			}
		}).fail(function (){
			alert("Error al conectarse con el servidor");
		});
	}
})();