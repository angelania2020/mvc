<?php

require_once('views/CView.php');
require_once('controllers/CController.php');

$view = new CView();
$controller = new CController();

$pageHeader = $view->GetHeader();
// $pageBody = $view->ViewMainPage(); // эту или 14 строку можно закомментировать, чтобы не было дубликата
$pageFooter = $view->GetFooter();

include($pageHeader);
$pageData = $view->ViewMainPage();
// include($pageBody);
include($pageFooter);
