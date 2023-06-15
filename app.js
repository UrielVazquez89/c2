// JavaScript Document
$.ajax({
	type:'POST',
	url: url_grupos,
	data: { sid:SID},
	dataType: 'json',
	success: requestGrupos,
	error: function(){alert (MENSAJE_ERROR_SID);}
});

$('#btnDescargar').on('click',requestDescargar);

function requestDescargar(){
	tabletoExcel('novedades','10');
}


