$(document).ready(function(){

	$.post('index2.php?module=quiz&action=afficher_liste_quiz',function(data){
		$("#liste_quiz").html(data);
	});

	$(document).on("click",".start",function(event) {
		var idQuiz=$(this).attr("id");
		console.log(idQuiz);

		$.post('index2.php?module=quiz&action=afficher_quiz&idQuiz='+idQuiz,function(data){

			$("#quiz").html(data);
		});
	});

    $(document).on("click","#envoi",function(event) {
	    event.preventDefault();
	    var question=$(this).attr("name");
	    var choix=$("input[name='"+question+"']:checked").val();
	    $.post('index2.php?module=quiz&action=verifierRep',{
	    	choix:choix,
	    },function(data){
	        $("#resultat"+question).html(data);
	    });
	});
        
});



