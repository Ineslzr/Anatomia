$(document).ready(function(){

  $('#sujet').on("click",function(event){
    var proposition_sujet=document.getElementById("proposition_sujet").value;
    $.post('ajax/soumettre_sujet_discussion.php',{
      proposition_sujet:proposition_sujet,
    },function(data){
      $("#liste_discussion").append("<div class=\"card mt-3\"><div class=\"card-header\""+data.sujet+"</div><div class=\"card-body\"><h5 class=\"card-title\">Proposé le : "+data.date+"</h5><a href=\"index.php?module=discussion&action=afficher_discussion&idSujet="+data.idSujet+"\" class=\"btn btn-primary\">Discuter !</a></div></div>");
    });
  });


  var idSujet = $(".discussion").data("id");
  $('#envoi_parent').on("click", function(event) {
    var message=$('#content').val();
    $.post('ajax/ajout_message.php',{
      idSujet:idSujet,
      message:message,
      parent:1,
      parent_id:0,

    },function(data){
        $(".discussion").append("<br><div name=\""+data.id+"\" id=\""+data.id+"\"><div class=\"card\"><div class=\"card-header\">"+data.auteur+" le "+data.date+"</div><br>"+data.message+"<div class=\"form-group\"><button type=\"submit\" class=\"btn btn-primary\" name=\""+data.id+"\" id=\"repondre\">Répondre</button></div><br><div class=\"form_reponse"+data.id+"\"></div></div></div><div id=\"rep"+data.id+"\"></div>");
    });
    $('#content').val('');
    return false;
  });

  $(document).on("click","#repondre",function(event) {
    var idMessage=$(this).attr("name");
    $(".form_reponse"+idMessage).html("<form action=\"\" method=\"POST\"><div class=\"form-group col-lg-12\"><textarea name=\"content\" id=\"content_children\" class=\"form-control\" placeholder=\"Répondre\"></textarea><button type=\"submit\" class=\"btn btn-primary\" name=\""+idMessage+"\" id=\"envoi_children\">Envoyer</button></div></form>");
  });

  $(document).on("click","#envoi_children", function(event) {
    var rep=$(this).attr("name");
    var message=$('#content_children').val();
    var repondre=$("div[name='"+rep+"']:checked").val();
    $.post('ajax/ajout_message.php',{
      idSujet:idSujet,
      message:message,
      parent:0,
      parent_id:rep,
    },function(data){
      $("#rep"+rep).append("<div id=\"reponse"+data.id+"\" class=\"card card-body w-75\">"+data.auteur+" le "+data.date+"<br>"+data.message+"</div>");
    });

    $('.form_reponse'+rep).empty();
    return false;
  });

  $(document).on("click","#supprimer",function(){
    var idMessage=$(this).attr("name");
    $.post('ajax/supprimer_message.php',{
      idMessage:idMessage,
    },function(data){
      $("#reponse"+idMessage).remove();
    });

  });


});


















