$(function() {
	
  $("#accordion").accordion({
    active: false,
    collapsible: true,
    autoheight:false,
    clearStyle:true
  });
  
  $(".accordionMenu").accordion({
  	header: 'h2'
  });
  
});