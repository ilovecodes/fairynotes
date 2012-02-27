
jQuery.fn.deleteClicked = function(link) {
	$("#dialog").html("Are you sure?").dialog({ buttons: [
	                                                      {
	                                                          text: "Yes",
	                                                          click: function() {window.location = link}
	                                                      },
	                                                      {
	                                                    	  text: "No",
	                                                    	  click: function() { $(this).dialog("close"); }
	                                                      }
	                                                  ],
	                                            modal: true,
	                                            closeOnEscape:true,
	                                            resizable:true
	                                            });
}
	
jQuery.fn.deleteFormClicked = function(form) {
		$("#dialog").html("Are you sure?").dialog({ buttons: [
		                                                      {
		                                                          text: "Yes",
		                                                          click: function() {
		                                                        	  $('form').submit();
		                                                          }
		                                                      },
		                                                      {
		                                                    	  text: "No",
		                                                    	  click: function() { $(this).dialog("close"); }
		                                                      }
		                                                  ],
		                                            modal: true,
		                                            closeOnEscape:true,
		                                            resizable:true
		                                            });
}

$(document).ready(function() {
	var confirmedSubmit = false;
	$('.delete').click(function(){
		$(this).deleteClicked($(this).attr('rel'));
	});
	
		$('.submit').click(function() {
				$(this).addClass('clicked-button');
		});
			
		$('#manage-user-posts').submit(function(event) {
			/*if(!confirmedSubmit) {
				if($(".clicked-button").val() === "Delete Selected")
				   {
					alert('clicked here 2');
				     $(this).deleteFormClicked(this);
				   }
				confirmedSubmit = true;
				$(this).find(".clicked-button").removeClass("clicked-button");
				return false;
			}*/
		});
});
