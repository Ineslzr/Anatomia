$(document).ready(function(){
  $('#envoi').on("click", function(event) {
    var comm=$('#commentaire').val();
    var idArticle=$(this).attr("name");
    $.post('../ajax/poster_commentaire',{
          commentaire:comm,
          idArticle:idArticle,
        },function(data){
          $("#commentaires").append("<div class=\"card\"><div class=\"card-body\">"+data.auteur+" le "+data.date+"<br>"+data.commentaire+"</div></div><br>");

        }
    );

    $('#commentaire').val('');
    return false;
  });

  $("#lien_voir_commentaire").on("click",function(event) {
    event.preventDefault();
    var idArticle=$(this).attr("name");
    console.log(idArticle);
    $.post('../ajax/afficher_commentaire.php',{
      idArticle:idArticle,
    },function(data){
      $("#commentaires").append(data.list);

    });
  });

});














