$(document).ready(function(){

  $("#liste_discussion").load('index2.php?module=discussion&action=afficher_liste_discussion');

  $('#sujet').on("click",function(event){
    var proposition_sujet=document.getElementById("proposition_sujet").value;
    console.log(proposition_sujet);
    $.post('index2.php?module=discussion&action=soumettre_sujet',{
      proposition_sujet:proposition_sujet,
    },function(data){
      $("#liste_discussion").html(data);
    });
  });

  var idSujet = $(".discussion").data("id");
  $(".discussion").load("index2.php?module=discussion&action=afficher_discussion&idSujet="+idSujet);


  $('#envoi_parent').on("click", function(event) {
    var message=$('#content').val();
    $.post('index2.php?module=discussion&action=ajout_message&idSujet='+idSujet,{
      message:message,
      parent:1,
      parent_id:0,

    },function(data){
      $(".discussion").html(data);
    });

    $('#content').val('');
    return false;
  });

  $(document).on("click","#repondre",function(event) {
    var idMessage=$(this).attr("name");
    $.post('index2.php?module=discussion&action=form_reponse',{
      idMessage:idMessage,
    },function(data){
      $(".form_reponse"+idMessage).html(data);
    });
  });

  $(document).on("click","#envoi_children", function(event) {

    var rep=$(this).attr("name");
    var message=$('#content_children').val();
    var repondre=$("div[name='"+rep+"']:checked").val();
    $.post('index2.php?module=discussion&action=ajout_message&idSujet='+idSujet,{
      message:message,
      parent:0,
      parent_id:rep,
    },function(data){
      $(".discussion").html(data);
    });

    $('.form_reponse'+rep).empty();
    return false;
  });


});














