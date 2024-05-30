<?php 
	// Incluir la clase TeamsActions
	require_once "../../clases/TeamsActions.php";

	// Obtener los datos del POST en formato JSON y convertirlos a un array asociativo
	$datos = json_decode(file_get_contents("php://input"), true);

	// Verificar si se recibieron los datos esperados (ID_team y ID_action)
	if (isset($datos['ID_team']) && isset($datos['ID_action'])) {
		// Crear una instancia de la clase TeamsActions
		$userTeam = new TeamsActions();

		// Llamar al método addTeamActionLink() y pasarle los datos
		$resultado = $userTeam->addTeamActionLink($datos);
		
		// Devolver el resultado de la inserción como JSON
		echo json_encode(['success' => $resultado]);
	} else {
		// Devolver un mensaje de error si los datos no están completos
		echo json_encode(['error' => 'Los datos enviados están incompletos']);
	}
?>
