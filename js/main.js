var holdingPen = {};

// go time
function timerStart(){
	// rando
	var rando = parseInt(Math.random()*60);
	var count = 0;

	var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

	function timer()
	{
	  count=count+1;
	  if (count == rando)
	  {
	     clearInterval(counter);
	     //counter ended, do something here
	     var msg = "You made it to: "+count+".  Good job.";
	     $("#message").html(msg);
	     $("#message").toggle();
	     $('body').css("background-image", "url("+holdingPen.full_image_URL+")");
	     return;
	  }

	  $("#counter").html(count);
	}
}

function loadAPOD(){	
	archivesURL = "php/getAPODarchives.php";
	$.ajax({
	  url: archivesURL,	  
	  success: function(response){
	  	var APODsingle = pullURLs(response);	  	
	  	pullsingleURL(APODsingle);	  		  	
	  },
	  dataType: "html"
	});
}


function pullURLs(html){	
	var archives = $(html).filter("b").children().filter("a");
	var rando_picture_index = parseInt(Math.random()*archives.length);
	var rando_picture_element = archives[rando_picture_index];
	var rando_picture_href = jQuery(rando_picture_element).attr('href');
	return rando_picture_href;
}

function pullsingleURL(url){
	archivesURL = "php/getAPODsingle.php";
	var data = {};
	data.url = url;
	$.ajax({
	  url: archivesURL,	  
	  data: data,
	  success: function(response){	 
		  var image_suffix = $('img',response).attr('src');	  	
		  var full_image_URL = "http://apod.nasa.gov/apod/"+image_suffix;
		  console.log(full_image_URL);
		  holdingPen.full_image_URL = full_image_URL;	  
	  },
	  dataType: "html"
	});
	
}