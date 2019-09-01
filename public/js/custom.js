$(document).ready(function(){
  
  $("#clear").click(function(){
	  $("#form")[0].reset();
  });
  $('#name').keyup(function(){
    // Search Text
    var search = $(this).val();

    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:nth-child(1):contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
         $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
    }

  });

});
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});

$(document).ready(function(){
	
});