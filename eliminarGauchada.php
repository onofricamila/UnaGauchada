<?php

function toIndex() {
	header('Location: index.php');
	die;
}

include_once 'validate.php';

if (!validateLogin()) {
	$_SESSION['msg'] = "Debe estar logueado para realizar esta acción.";
	toIndex();
}

$loggedId = $_SESSION['idUsers'];

if (!isset($_POST['idGauchada'])) {
	$_SESSION['msg'] = "No se envio ningun id de gauchada a eliminar.";
	toIndex();
}

$id = $_POST['idGauchada'];

if (!validateGauchada($id)) {
	$_SESSION['msg'] = "El id de gauchada ingresado no existe.";
	toIndex();
}

include 'gauchadasFx.php';

if (!(isAdmin() || ownsGauchada($id))) {
	$_SESSION['msg'] = "No tiene permisos para realizar esta accion.";
	toIndex();
}

if (isExpired($gauchada = getOneGauchada($id))) {
	$_SESSION['msg'] = "La gauchada seleccionada no puede ser eliminada porque ya expiro.";
	toIndex();
}

$helps = null;
include_once 'fxHelp.php';
if (hasHelps($id)) {
	$helps = getHelps($id);
}

if (deleteGauchada($id)) {
	$_SESSION['success'] = "La gauchada se ha eliminado con éxito.";

	if ($helps) {
		while ($currentHelp = $helps->fetch_assoc()) {
			$user = getUser($currentHelp['idUsers'])
			mailHelpDeleted($user, $gauchada);
		}
	}
	else {
		include_once 'credits.php';
		incrementCredits($loggedId);
	}

	include_once 'fxCategory.php';
	$cate = getCategory($gauchada['idCategory']);
	if (($cate['deleted']) && (!cateHasGauchadas($gauchada['idCategory']))) {
		deleteCategoryFisico($gauchada['idCategory'])
	}

} else {
	$_SESSION['msg'] = "La gauchada no pudo ser eliminada. Por favor, intente mas tarde.";
}

toIndex();
