<?php 
class GetData{
	
	public function get(){
		
		return array(
					array('nombres' => 'Mauro Enrique' , 'apellidos' => "Canales Zapata" , 'edad' => 22, 'deporte' => 'futbol'),
					array('nombres' => 'Juan' , 'apellidos' => "Canales Zapata" , 'edad' => 20, 'deporte' => 'futbol'),
					array('nombres' => 'Gris Marianela' , 'apellidos' => "Canales Zapata" , 'edad' => 26, 'deporte' => 'futbol,voley'));

	}
}


new GetData;
 ?>