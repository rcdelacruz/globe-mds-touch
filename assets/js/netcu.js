function changeProjects() {
	if(typeof isActive != "undefined" && isActive) {
		return;
	}
	isActive = true;	
	if(typeof z != "undefined" && typeof num != "undefined" && typeof run != "undefined" && run)
	{
		var z_out = z;
		z++;
		if(z > num) {
			z = 1;
		}
		doAnimation(z_out, z);
	}
	else if(typeof interval != "undefined") {
		window.clearInterval(interval);
	}
}

function nextProject() {
	if(isActive) {
		return;
	}
	isActive = true;
	run = false;
	if(typeof z != "undefined" && typeof num != "undefined")
	{
		if(typeof interval != "undefined") {
			window.clearInterval(interval);
		}
		var z_out = z;
		z++;
		if(z > num) {
			z = 1;
		}
		doAnimation(z_out, z);
	}
}

function prevProject() {
	if(isActive) {
		return;
	}
	isActive = true;
	run = false;
	if(typeof z != "undefined" && typeof num != "undefined")
	{
		if(typeof interval != "undefined") {
			window.clearInterval(interval);
		}
		var z_out = z;
		z--;
		if(z <= 0) {
			z = num;
		}
		doAnimation(z_out, z);
	}
}

function doAnimation(z_out, z_in) {
	var projectout = 'project' + z_out;
	var projectin = 'project' + z_in;
	$("#" + projectout).fadeOut('slow', function() {
		replaceText(z_in);
		$("#" + projectin).fadeIn('slow', function() {
			isActive = false;
		});
	});	
}

function replaceText(z_in) {
	if(typeof project_title != "undefined" && typeof project_desc != "undefined")
	{
		var index = z_in-1;
		$("#project_title").html(project_title[index]);
		$("#project_desc").html(project_desc[index]);
	}
}

function changeImage(image_id, image_url, description) {
	$("#" + image_id).fadeOut('slow', function() {
		$("#" + image_id).attr("src", image_url);
		$("#" + image_id).attr("alt", description);
		$("#" + image_id).attr("title", description);
		$("#imagegallery_desc").html(description);
		$("#" + image_id).fadeIn('slow');
	});
}

(function($) {
	  var cache = [];
	  // Arguments are image paths relative to the current page.
	  $.preLoadImages = function() {
	    var args_len = arguments.length;
	    for (var i = args_len; i--;) {
	      var cacheImage = document.createElement('img');
	      cacheImage.src = arguments[i];
	      cache.push(cacheImage);
	    }
	  }
	})(jQuery)