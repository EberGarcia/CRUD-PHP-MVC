<?php

require_once "controllers/template.controller.php";
require_once "controllers/formulario.controller.php";

require_once "models/formulario.model.php";

$template = new TemplateController();
$template->ctrTemplate();

echo '<pre>';