function change(src, id)
{
	var spl = src.split(/\//);
	alert(spl[spl.length -2]);
	$("#"+id).attr("src").replace("large/"+spl[spl.length-1]);
	alert($("#"+id).attr("src"));
}