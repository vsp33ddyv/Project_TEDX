function overlay(){
	er = document.getElementById("achtergrond");
	el = document.getElementById("login");
	el.style.visibility = (el.style.visibility == "visible") ? "hidden"
	: "visible";

	var g = document.createElement('div');
	g.classList.add("overlayss");
	
	
	
	/*
      d.height(docHeight)
      d.css({
         'opacity' : 0.4,
         'position': 'absolute',
         'top': 0,
         'left': 0,
         'background-color': 'black',
         'width': '100%',
         'z-index': 5000
      });*/
}


