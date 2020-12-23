
$(document).ready(function(){
  $("#lien_voir_commentaire").on("click",function(event) {
   event.preventDefault()
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
  });
});











