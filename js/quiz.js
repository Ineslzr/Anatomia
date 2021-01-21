$(document).ready(function(){

	$(document).on("click","#envoi",function(event) {
		event.preventDefault();
		var question=$(this).attr("name");
		var choix=$("input[name='"+question+"']:checked").val();
		$.post('ajax/verifier_reponse.php',{
			choix:choix,
		},function(data){
			$("#resultat"+question).append("<div>"+data.resultat+"</div>");
		});

		$(this).prop("disabled",true);
	});
        
});



