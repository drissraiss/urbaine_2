<?php

require_once("classAdminChoices.php");

$choice = $_GET["choice"];
switch ($choice) {
    case "notifications":
        AdminChoices::notifications();
        break;
    case "messages":
        AdminChoices::messages();
        break;
    case "profile":
        AdminChoices::profile();
        break;
    case "demandes":
        AdminChoices::demandes();
        break;
    case "plaines":
        AdminChoices::plaines();
        break;
    case "employes":
        AdminChoices::employes();
        break;
    case "parametres":
        AdminChoices::parametres();
        break;
    default:
        AdminChoices::notifications();
}
