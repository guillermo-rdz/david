(function (){
	var $user = $("[name='user']")
	var $pass = $("[name='pass']");
	$(".error").hide();

	$("#btn-submit").on("click",verificar);

	function verificar(e){
		e.preventDefault();
		if ($user.val() == "" || $pass.val() == "") {
			$(".error").show();
			$user.css({"border-color":"red","box-shadow": "0px 0px 10px 0.5px red"})
			$pass.css({"border-color":"red","box-shadow": "0px 0px 10px 0.5px red"})
		} else {
			$(".error").hide();
			$user.css({"border-color": "#66afe9", "box-shadow": "0px 0px 10px 0.5px #66afe9"});
			$pass.css({"border-color": "#66afe9", "box-shadow": "0px 0px 10px 0.5px #66afe9"});
		}
	}
})();