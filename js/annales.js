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
			$(select).append("<option value=\""+i+"\">"+window.moduledata[i]+"</option>");
		}
	};
	for(var i = 0;i<fileSelect.files.length;i++){
		if(!endsWith(fileSelect.files[i].name.split(/(\\|\/)/g).pop(), ".pdf")) continue;
		var div = document.createElement("div");
		div.setAttribute('class', "col-lg-4");
		div.setAttribute('style', "border:1px solid gray;")
		div.innerHTML = fileSelect.files[i].name.split(/(\\|\/)/g).pop();
		div.appendChild(document.createElement("br"));

		var typeDoc1 = document.createElement("input");
		typeDoc1.setAttribute('type', "radio");
		typeDoc1.setAttribute('name', "typeDoc["+i+"]");
		typeDoc1.setAttribute('value', "examen");
		typeDoc1.setAttribute('id', "examen");
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
		typeDoc3.setAttribute('value', "correction");
		typeDoc3.setAttribute('id', "correction");
		var label3 = document.createElement("label");
		label3.setAttribute('for', "correction");
		label3.innerHTML = "Corrigé";
		div.appendChild(typeDoc3);
		div.appendChild(label3);
		div.appendChild(document.createElement("br"));

		var select = document.createElement("select");
		select.setAttribute('id','module');
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
		var currentYear = new Date().getFullYear();
        var startYear = 2000;
        while ( startYear <= currentYear ) {
                $(yearselect).append("<option value=\""+ startYear +"\">"+startYear+ "-" + ++startYear +"</option>");
        }

        div.appendChild(yearselect);

		form.appendChild(div);
	}
	var clearfix = document.createElement("div");
	clearfix.setAttribute('class',"clearfix");
	form.appendChild(clearfix);

	var upload = document.createElement("button");
	upload.setAttribute('type', "submit");
	upload.setAttribute('id', 'upload-button');
	upload.innerHTML = "Upload";
	form.appendChild(upload);
}

form.onsubmit = function(event) {
	event.preventDefault();

 // Update button text.
 $("#upload-button").text('Upload en cours...');

 var files = fileSelect.files;
 var formData = new FormData();
 for (var i = 0; i < files.length; i++) {
 	var file = files[i];

   // Check the file type.
   if (!file.type.match('application/pdf')) {
   	continue;
   }

   // Add the file to the request.
   formData.append('attachment[]', file, file.name);
}
var xhr = null; 
  if(window.XMLHttpRequest) // Firefox et autres
  	xhr = new XMLHttpRequest(); 
  else if(window.ActiveXObject){ // Internet Explorer 
  	try {
  		xhr = new ActiveXObject("Msxml2.XMLHTTP");
  	} catch (e) {
  		xhr = new ActiveXObject("Microsoft.XMLHTTP");
  	}
  }
  else { // XMLHttpRequest non supporté par le navigateur 
  	xhr = false; 
  }
  xhr.open('POST', 'upload.php', true);
  xhr.onload = function () {
  	if (xhr.status === 200) {
  // File(s) uploaded.
  $("#upload-button").text('Upload en cours...');
} else {
	alert('An error occurred!');
}
};
xhr.send(formData);
}