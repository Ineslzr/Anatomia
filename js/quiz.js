$(document).ready(function(){

    $.post('index2.php?module=quiz&action=afficher_quiz&idQuiz=1',function(data){
        $("#quiz").html(data);
    });

    $(document).on("click","#envoi",function(event) {
	    event.preventDefault();

	   //$("#rep"+question).prop("checked",false);	 

	    var question=$(this).attr("name");
	  	console.log(question);

	    var choix=$("input[name='"+question+"']:checked").val();
	    console.log(choix);
	    $.post('index2.php?module=quiz&action=verifierRep',{
	    	choix:choix,
	    },function(data){
	    	
	        $("#resultat"+question).html(data);
	        

	    });
	});
        
});



