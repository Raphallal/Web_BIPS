var form = document.getElementById('file-form');
var fileSelect = document.getElementById('file-select');
var uploadButton = document.getElementById('upload-button');

function endsWith(str, suffix) {
	return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

function addForm(){
	if(!first_upload){
		var tag = form.getElementsByTagName("div");
		for(var i = 0; i<tag.length;){
			form.removeChild(tag[0]);
		}
		var ul = form.getElementsByTagName("button");
		form.removeChild(ul[0]);
	}
	first_upload = false;
	window.moduledata = null
	var addOptions = function(select) {
		for (var i = 0; i < window.moduledata.length; i++) {
			$(select).append("<option value=\""+window.moduledata[i]["module"]+"\">"+window.moduledata[i]["titre"]+"</option>");
		}
	};
	for(var i = 0;i<fileSelect.files.length;i++){
		if(!endsWith(fileSelect.files[i].name.split(/(\\|\/)/g).pop(), ".pdf")) continue;
		var div = document.createElement("div");
		div.setAttribute('class', "col-lg-6");
		div.setAttribute('style', "border:1px solid gray;")
		div.innerHTML = fileSelect.files[i].name.split(/(\\|\/)/g).pop();
		div.appendChild(document.createElement("br"));

		var typeDoc1 = document.createElement("input");
		typeDoc1.setAttribute('type', "radio");
		typeDoc1.setAttribute('name', "typeDoc["+i+"]");
		typeDoc1.setAttribute('value', "examen");
		typeDoc1.setAttribute('id', "examen");
		typeDoc1.setAttribute('checked', "true");
		var label1 = document.createElement("label");
		label1.setAttribute('for', "examen");
		label1.innerHTML = "Examen";
		div.appendChild(typeDoc1);
		div.appendChild(label1);
		div.appendChild(document.createElement("br"));

		var typeDoc2 = document.createElement("input");
		typeDoc2.setAttribute('type', "radio");
		typeDoc2.setAttribute('name', "typeDoc["+i+"]");
		typeDoc2.setAttribute('value', "td");
		typeDoc2.setAttribute('id', "td");
		var label2 = document.createElement("label");
		label2.setAttribute('for', "td");
		label2.innerHTML = "TD";
		div.appendChild(typeDoc2);
		div.appendChild(label2);
		div.appendChild(document.createElement("br"));

		var typeDoc3 = document.createElement("input");
		typeDoc3.setAttribute('type', "radio");
		typeDoc3.setAttribute('name', "typeDoc["+i+"]");
		typeDoc3.setAttribute('value', "correction examen");
		typeDoc3.setAttribute('id', "correction examen");
		var label3 = document.createElement("label");
		label3.setAttribute('for', "correction examen");
		label3.innerHTML = "Corrigé Examen";
		div.appendChild(typeDoc3);
		div.appendChild(label3);
		div.appendChild(document.createElement("br"));

		var typeDoc4 = document.createElement("input");
		typeDoc4.setAttribute('type', "radio");
		typeDoc4.setAttribute('name', "typeDoc["+i+"]");
		typeDoc4.setAttribute('value', "correction td");
		typeDoc4.setAttribute('id', "correction td");
		var label4 = document.createElement("label");
		label4.setAttribute('for', "correction td");
		label4.innerHTML = "Corrigé TD";
		div.appendChild(typeDoc4);
		div.appendChild(label4);
		div.appendChild(document.createElement("br"));

		var select = document.createElement("select");
		select.setAttribute('id','module');
		select.setAttribute('name','module[]');
		var wrapAddOptions = function(select) {
			if (window.moduledata == null) {
				$.getJSON("modulerequest.php", function(result) {window.moduledata = result; addOptions(select);});
			} else {
				addOptions(select);
			}
			div.appendChild(select);
		};
		wrapAddOptions(select);
		div.appendChild(document.createElement("br"));

		var yearselect = document.createElement("select");
		yearselect.setAttribute('id', 'year');
		yearselect.setAttribute('name', 'year[]');
		var currentYear = new Date().getFullYear();
        var startYear = 2000;
        while ( startYear < currentYear ) {
                $(yearselect).append("<option value=\""+ startYear +"\">"+startYear+ "-" + ++startYear +"</option>");
        }

        div.appendChild(yearselect);

		form.appendChild(div);
	}
	var clearfix = document.createElement("div");
	clearfix.setAttribute('class',"clearfix");
	form.appendChild(clearfix);

	var upload = document.createElement("input");
	upload.setAttribute('type', "submit");
	upload.setAttribute('id', 'upload-button');
	upload.innerHTML = "Upload";
	form.appendChild(upload);
}
