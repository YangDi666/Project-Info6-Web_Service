	    window.alert(loc);
	    var x=47.99742;
	    var y=2.43085;
	    window.onload = function() {
                //initialization
	        var map = new google.maps.Map(document.getElementById("map_canvas"),{
    	            	
			center : new google.maps.LatLng(x, y),
			zoom:7,
			panControl:true,
			zoomControl:true,
			mapTypeControl:true,
			scaleControl:true,
			streetViewControl:true,
			overviewMapControl:true,
			rotateControl:true,    
			mapTypeId: google.maps.MapTypeId.ROADMAP

                });

		//Geocoder
		var geocoder = new google.maps.Geocoder();
		geocoder.geocode({address:loc},function geoResults(results, status){

	  		if (status == google.maps.GeocoderStatus.OK) {
	      
	     	 		alert("Location : "+results[0].formatted_address);
	     			map.setCenter(results[0].geometry.location); 

				var myLatLng = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
	     			var marker=new google.maps.Marker({position:myLatLng,});
				marker.setMap(map); 
	  		}
			else{
	    			alert("：error " + status);
	  		}
		});
 

	    }
