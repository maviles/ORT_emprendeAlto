$(document).ready(function() {
	
	//revisarSesionLogin("doSession.php");

	$("#statsPageviews").hide();
	$("#statsVisits").hide();
	$("#statsPageviewsText").hide();
	$("#statsVisitsText").hide();
	rotateMetrics(); 

	function rotateMetrics() {
		$("#statsPageviewsText").slideDown("slow");
		$("#statsPageviews").slideDown("slow", function() {
			setTimeout(function() {
				$("#statsPageviewsText").slideUp("slow");
				$("#statsPageviews").slideUp("slow", function() {
					$("#statsVisitsText").slideDown("slow");
					$("#statsVisits").slideDown("slow", function() {
						setTimeout(function() {
							$("#statsVisitsText").slideUp("slow");
							$("#statsVisits").slideUp("slow", function() {
								rotateMetrics();
							}); 
						}, 3000);
					}); 
				}); 
			}, 3000);
		});
		 
	}
});
	
