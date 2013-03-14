$(document).ready(function() {
	var base_url = $('#base_url').val();	
	CKEDITOR.replace('editor1');
});
function validar_login(){
	if ($('#user').val()=="") {
		alert("ATENCIÓN:\n- DEBE COMPLETAR TODOS LOS DATOS.");
		return false;
	};
	if ($('#password').val()=="") {
		alert("ATENCIÓN:\n- DEBE COMPLETAR TODOS LOS DATOS.");
		return false;
	};
	return true;
}

function validar_imagen(){
	if ($('#lefile').val()=="") {
		alert("ATENCIÓN:\n- DEBE SELECCIONAR UNA IMAGEN.");
		return false;
	};
	return true;
}



function validar_not(){	
	if(confirm("Está seguro de guardar los cambios?")) {
		if ($('#img-header-a').val()=="") {
			alert("ATENCIÓN:\n- DEBE SELECCIONAR UNA IMAGEN.");
			return false;
		};
		return true;
	};	
	return false;
}

function valida_emprende(){	
	if(confirm("Está seguro de guardar los cambios?")) {
		return true;
	};	
	return false;
}

function validar_videos(){
	if(confirm("Está seguro de guardar los cambios?")) {
		if ($('#url').val()=="") {
			alert("ATENCIÓN:\n- FALTA INGRESAR URL DEL VIDEO.");
			return false;
		};
		if ($('#descripcion').val()=="") {
			alert("ATENCIÓN:\n- FALTA INGRESAR DESCRIPCIÓN.");
			return false;
		};
		return true;
	};	
	return false;
}