/*function overlay(){
	er = document.getElementById("achtergrond");
	el = document.getElementById("login");
	el.style.visibility = (el.style.visibility == "visible") ? "hidden"
	: "visible";
	
}*/

function clicker(){
	var thediv=document.getElementById('displaybox');
	if(thediv.style.display == "none"){
		thediv.style.display = "";
		thediv.innerHTML = "<table width='100%' height='100%'><tr><td align='center' valign='middle' width='100%' height='100%'><object classid='clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B' codebase='http://www.apple.com/qtactivex/qtplugin.cab' width='640' height='500'><param name='src' value='http://cowcast.creativecow.net/after_effects/episodes/Shape_Tips_1_POD.mp4'><param name='bgcolor' value='#000000'><embed src='//cowcast.creativecow.net/after_effects/episodes/Shape_Tips_1_POD.mp4' autoplay='true' pluginspage='http://www.apple.com/quicktime/download/' height='500' width='640' bgcolor='#000000'></embed></object><br><br><a href='#' onclick='return clicker();'>CLOSE WINDOW</a></td></tr></table>";
	}else{
		thediv.style.display = "none";
		thediv.innerHTML = '';
	}
	return false;
}

