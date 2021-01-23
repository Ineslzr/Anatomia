$(document).ready(function(){
  $('#envoi').on("click", function(event) {
    var comm=$('#commentaire').val();
    $.post('../ajax/poster_commentaire',{
          commentaire:comm,
        },function(data){
          $("#commentaires").append("<div class=\"card\"><div class=\"card-body\">"+data.auteur+" le "+data.date+"<br>"+data.commentaire+"</div></div><br>");

        }
    );

    $('#commentaire').val('');
    return false;
  });

  $("#lien_voir_commentaire").on("click",function(event) {
    event.preventDefault();

    $.get('../ajax/afficher_commentaire.php',function(data){
      $("#commentaires").append(data.list);

    });
  });

});














