$(document).ready(function(){
  $('#envoi').on("click", function(event) {
    var comm=$('#commentaire').val();
    $.post('/index2.php?module=commentaire&action=ajout_commentaire&idArticle=1',{
      commentaire:comm,

    },function(data){
        $("#commentaires").html(data);

    }
      );

    $('#commentaire').val('');
    return false;
  });




  $("#lien_voir_commentaire").on("click",function(event) {
    event.preventDefault();
    $.post('/index2.php?module=commentaire&action=afficher_commentaire',function(data){
        $("#commentaires").html(data);

    });
  }); 











  /*$("#lien_voir_commentaire").on("click",function(event) {
   event.preventDefault();
   page = ($(this).attr("href"));
    $.ajax({
      url: page,
      dataType: "html",
      success: function(data) {
        $("#commentaires").prepend(data);
      },
      error: function (resultat,statut, erreur) {
        $("#commentaires").prepend("Erreur de chargement...");
      }
    });
  });*/


/*
  $('#envoi').on("click", function(event) {
    event.preventDefault();

    var commentaire=$('#commentaire').val();
      if(commentaire != ""){
        $.ajax({
          url:"index.php?module=commentaire&action=ajout_commentaire&idArticle=1",
          type:"POST",
          data: { 'commentaire' : commentaire},
          //dataType:html,
                  
        });
        getCommentaire(commentaire);
      }
  });

 function getCommentaire(commentaire){
  $.ajax({
    type:'POST',
    url:"index.php?module=commentaire&action=recup_commentaire",
    data: {
      'commentaire':commentaire,
    },
    dataType:html,
    success: function(data){
      $("#commentaires").prepend(data);
    },
  });
}
*/
});














