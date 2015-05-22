<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Home</title>   
<style>
#main_content{
background: url("tedXbg.jpg") no-repeat fixed center; 
width:70%;	
height:99%;
background-color : white;
}
h1{
color:white;
}
</style>	
<script type="text/javascript">
function changeColor()
{
 var col = document.getElementById("changecolor");
    col.style.backgroundColor = white;
}
</script>	
    </head>
    <body>
        <h1>Home</h1>
		<div name="main_content">
		<table id="foto_table">
		<tr>
		
		<td width="389px" Height="389px" background="art2.jpg" onclick= "changeColor();"> <h1>This is article number 1.<h1></td>
		
		<td width="222px" background="art1.jpg"><h1>This is article number 2.<h1></td>
		<td width="221px" Height="460" background="art3.jpg"><h1>This is article number 3.<h1></td>
		
		
		</tr>
		<tr><td width="465" Height="258px" background="art4.jpg"><h1>This is article number 4.<h1></td>
		<td width="461" Height="258px" background="art5.jpg"><h1>This is article number 5.<h1></td>
		<td width="490" Height="260px" background="art6.jpg"><h1>This is article number 6.<h1></td>
		</tr>
		</table>
		<div id="upper_content"></div>
		<div id="lower_content"></div>
		</div>
    </body>
</html>


