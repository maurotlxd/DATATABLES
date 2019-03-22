$(document).ready(function(){
$("#ejemplo1").DataTable({
	language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    scrollX:false,
    scrollY:false,
    ordering:true,
    paging : true,
    info : true,
    lengthChange : true,
    searching : true,
    lengthMenu: [[5,10,15,-1],["5","10","15","Todos"]],
	pageLength:4,
	select : true,
	ajax:{
		url : "json/personas.json"
	},
	columns:[
			{data : "nombre"},
			{data : "apellidos"},
			{data : "edad"},
			{data : "deporte"}
	]
	 
});

$("#ejemplo1 tbody").on('click','tr',function(){
   if ($(this).hasClass('selected')) {
      	$(this).removeClass('selected');
      }
   else {
       $(this).addClass('selected');
        }
});

$(document).on('click','#eliminar',function(){
	var table = $('#ejemplo1').DataTable();
	var datos = $("#ejemplo1 tbody").find("tr");
	$.each(datos,function(key,value){
	if ($(value).hasClass("selected")) {
		value.remove();
	}
	
	});

});

$(document).on('click','#editar',function(){
	var table = $('#ejemplo1').DataTable();
	var datos = $("#ejemplo1 tbody").find("tr");
	var contador = 0;
	$.each(datos,function(key,value){
	if ($(value).hasClass("selected")){
		contador++;
	}
	});
	if (contador > 1) {
		alert("Solo debes seleccionar una opcion");
	}
	else if (contador === 0) {
		alert("Debes seleccionar un opcion");
	}else{

		alert("Correcto !");

	}
});
});