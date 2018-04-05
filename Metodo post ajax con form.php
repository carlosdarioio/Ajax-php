<?php 
if(isset($_POST['nombre'])){
	require "Base.php";
	
	$db=new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	
	$db->preparar("select pokemon from pokemones where pokemon = '{$_POST['nombre']}'");
	$db->ejecutar();
	$db->obtenerResultado();
	$db->prep()->bind_result($nombre);
	$db->resultado();
	$resultado=$db->numeroFilas();
	
	if($reusltado!=0){
		$respuesta= json_encode(["existe"=>true,"resultado"=>$nombre]);
		
	}else{
		$respuesta= json_encode(["existe"=>false]);
		
	}
	echo $respuesta;
}

?>