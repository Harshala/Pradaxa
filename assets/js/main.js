$(document).ready(function() {
     $( "#dlgPopUpForm" ).dialog({
	    autoOpen: false
	  });
  
  $("#update_link").click(function() {
    $("#dlgPopUpForm").dialog('open');
  });
});