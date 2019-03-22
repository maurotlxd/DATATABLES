$("#ejemplo1").dataTable({

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

